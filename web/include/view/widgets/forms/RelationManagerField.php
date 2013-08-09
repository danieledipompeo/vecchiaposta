<?php
require_once(realpath(dirname(__FILE__)) . '/../../../../include/view/widgets/FormWidget.php');

/**
 * @access public
 * @author Di Pompeo Sacco
 * @package include.view.widgets.forms
 */
class RelationManagerField extends FormWidget {

	/**
	 * @access public
	 * @param v
	 * @param preload
	 * @ParamType v
	 * @ParamType preload
	 */
	public function build($preload) {
		$content="";
		/**
		 * Daniele Di Pompeo
		 * imposta l'ordine delle entity della relazione
		 */
		switch ($this->orientation) {
			case RIGHT:
				$mainEntity = $this->form->entity->entity_1;
				$secondaryEntity = $this->form->entity->entity_2;
				$mainEntityRoleName=$this->form->entity->roleName1;
				$secondaryEntityRoleName=$this->form->entity->roleName2;
				break;
			case LEFT:
				$mainEntity = $this->form->entity->entity_2;
				$secondaryEntity = $this->form->entity->entity_1;
				$mainEntityRoleName=$this->form->entity->roleName2;
				$secondaryEntityRoleName=$this->form->entity->roleName1;
				break;
		}
		

		$relAttributes=$this->form->entity->fields;


		/**
		 * Retrieving all instances for this entity
		 * (Observation, at this point a query filter as to be added)
		 */
		$secondaryEntity->retrieveAndLink();
		if($preload==PRELOAD && $mainEntity->loaded)
		{
			$where_conditions=array($mainEntity->fields[0]->name."_".$mainEntity->name=>$mainEntity->instances[0]->getKeyFieldValue());
			$this->form->entity->retrieveAndLink($where_conditions);
		}

		foreach($secondaryEntity->instances as $k=>$instance)
		{
			$presentation = $secondaryEntity->getPresentation();
			$presentation = explode(", ", $presentation['fields'] );
			$text="";
			foreach($presentation as $a=>$v)
				$text=$instance->getFieldValue($v);
				
			$key = md5(microtime())."_".$this->form->formHash;
			$name = "{$secondaryEntity->fields[0]->name}_{$secondaryEntity->name}_".$key;

			$relationExists=false;
			$checked="";
			$foundRelation=null;
			if($preload==PRELOAD)
			{
				
				foreach($this->form->entity->instances as $relationInstanceKey=>$relationInstance)
				{
					if(	$relationInstance->getFieldValue($secondaryEntityRoleName)
							==
							$instance->getKeyFieldValue()
							&&
							$relationInstance->getFieldValue($mainEntityRoleName)
							==
							$mainEntity->instances[0]->getKeyFieldValue())
					{
						$relationExists=true;
						$foundRelation=$relationInstance;
						$checked='checked';
					}
				}
			}
				
			$content .= '<fieldset class="border ml5_100 flt_lft ptotal4">';
				
			$content .= '<div id="ck-button">';
			$content .= '<label class="tooltip" title="clicca per selezionare/desselezionare">';

			$content .= '<input class="mt7 flt_lft" id="'.$name.'" type="checkbox" name="'.  $name.'" value="'.$instance->getKeyFieldValue().'"  '.$checked.' />';

			$content .= '<span>'.$text.'</span>';
			$content .= '</label>';
			$content .= '</div>';
			$content .= '<div class="clear">&nbsp;</div>';
				
				
			// 			$content .= '<input class="mb20 h23 no_mt" id=" '. $name.' " type="checkbox" name=" '.$name.'" value="'.$instance->getKeyFieldValue().'"checked="'.$checked.'" />';
			// 			$content .= '<label class="flt_lft line_height23 w150 right_align mr20" for="'.$name.'">'.$text.'</label>';
			// 			$content .= '<div class="clear">&nbsp;</div>';
				
			/**
			 * Daniele Di Pompeo
			 * controllo sulla presenza dell'attributo
			 */
			for($i=3;$i<sizeof($this->form->entity->fields);$i++)
			{
				$value="";
				if($relationExists)
				{
					$value=$foundRelation->getFieldValue($this->form->entity->fields[$i]->name);
				}
				$content .= '<div class="mt10">';
				$content .= '<label class="flt_lft line_height23 w150 right_align mr20">'.$this->form->attributesNames[$relAttributes[$i]->name].'</label>';
				$content .= '<input class="flt_left tooltip w50"  type="text" name="'. $relAttributes[$i]->name.'_'.$key.'" value="'. $value.'" />';
				$content .= '</div>';
				$content .= '<div class="clear">&nbsp;</div>';

			}
			$content .= '</fieldset>';
		}

		$relationManagerSkinlet=new Skinlet("widget/RelationManager");
		$relationManagerSkinlet->setContent("label",$this->label);
		$relationManagerSkinlet->setContent("instances",$content);
		return $relationManagerSkinlet->get();
	}
}

/**
 * Factory for the checkbox widget
 * @author nicola
 *
 */

class RelationManagerFieldFactory implements FormWidgetFactory
{
	public function create($form)
	{
		return new RelationManagerField($form);
	}
}
?>