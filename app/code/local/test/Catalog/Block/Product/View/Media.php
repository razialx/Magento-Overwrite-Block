<?php

class test_Catalog_Block_Product_View_Media extends Mage_Catalog_Block_Product_View_Media
{
    
    public function fix_label($label)
    {
        if(preg_match('/.*view\s(.*)/i',$label,$matches))
            return $matches[1];
        else
            return $label;
    }

}
