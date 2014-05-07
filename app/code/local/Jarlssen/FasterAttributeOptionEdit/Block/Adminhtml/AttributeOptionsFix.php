<?php
/**
 * @author  Tsvetan Stoychev <tsvetan.stoychev@jarlssen.de>
 * @website http://www.jarlssen.de
 * @license http://opensource.org/licenses/osl-3.0.php Open Software Licence 3.0 (OSL-3.0)
 */

class Jarlssen_FasterAttributeOptionEdit_Block_Adminhtml_AttributeOptionsFix extends Mage_Adminhtml_Block_Catalog_Product_Attribute_Edit_Tab_Options
{

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('jarlssen/faster_attribute_option_edit/options-fix.phtml');
    }

}