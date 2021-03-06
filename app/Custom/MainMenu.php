<?php
namespace App\Custom;


use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class MainMenu
{
    protected function getCategories()
    {
        return DB::table('menus')
            ->where('parent_id')
            ->orderBy('weight')
            ->get(['id', 'caption', 'link']);
    }

    protected function  getItems($parentId)
    {
        return DB::table('menus')
            ->whereNotNull('parent_id')
            ->where('parent_id', $parentId)
            ->orderBy('weight')
            ->get(['caption','link']);
    }

    protected function buildSectionWithoutChildren($caption, $link)
    {
        return <<<HTML
            <li class="dropdown">
                <a href="$link" class="dropdown-toggle" data-toggle="dropdown">$caption</a>
           
HTML;
    }
    
    protected function buildSectionWithChildren($caption, $link, $items)
    {
        $itemsBlock = '';

        if(count($items) > 0) {
            $itemsBlock = '<ul class="navigation__dropdown">';
            foreach ($items as $item) {
                $itemsBlock .= <<<HTML
                    <li><a href="{$item->link}">{$item->caption}</a></li>
HTML;
             }
            $itemsBlock .= '</ul>';
         }
        
        $sectionHTML = str_replace('<li>','',$this->buildSectionWithoutChildren($caption, $link));
        return $sectionHTML . $itemsBlock . '</li>';
      }

      public function buildMenu()
      {
          $menu = '';
          $categories = $this->getCategories();

          if($categories instanceof Collection && count($categories) > 0) {
              foreach ($categories as $category) {
                  $items = $this->getItems($category->id);

                  if ($items instanceof Collection && count($items) > 0) {
                      $menu .= $this->buildSectionWithChildren($category->caption,$category->link, $items);
                  } else {
                      $menu .= $this->buildSectionWithoutChildren($category->caption, $category->link);
                  }
              }
          }
          return $menu;
      }
}