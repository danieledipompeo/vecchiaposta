<?php
require_once(realpath(dirname(__FILE__)) . '/../../../../include/view/widgets/FormWidget.php');

/**
 * @access public
 * @author Di Pompeo Sacco
 * @package include.view.widgets.forms
 */
class DateField extends FormWidget {

	/**
	 * @access public
	 * @param v
	 * @param preload
	 * @ParamType v 
	 * @ParamType preload 
	 */
	public function build($preload) {
		/**
		 * retrieving the field that has the same name of the graphic element that we're creating
		 */
		$field_to_modify = $this->form->entity->getField($this->name);
		
		if (isset($this->form->helpers[$this->name])) {
			$content .= "    <td>{$this->label} <a href=# title=\"{$this->form->helpers[$this->name]}\"><img src=\"img/form/help.gif\" class=\"helper\"></a> </td>\n";
		} else {
			$content .= "    <td>{$this->label}</td>\n";
		}
		if ($preload) {
			$date = Parser::formatDate($field_to_modify->value, STANDARD);
			$content .= " <input class=\"inl_blk cells mb20\"name=\"{$this->name}\" value=\"{$date}\"{$disabled}/><img width=16 height=16 src=\"img/calendar/calendar.ico\" onclick=\"displayDatePicker('{$this->name}');\">\n";
		} else {
			if ($this->mandatory == MANDATORY) {
				$today = date("d/m/Y");
			} else {
				$today = "";
			}
			$content .= " <td><input name=\"{$this->name}\" value=\"zio\"{$disabled} /><img width=16 height=16 src=\"img/calendar/calendar.ico\" onclick=\"displayDatePicker('{$this->name}');\" style=\"padding: 0px 0px 0px 2px;\"></td>\n";
		}
		return $content;
	}
}

/**
 * Factory for the checkbox widget
 * @author nicola
 *
 */

class DateFieldFactory implements FormWidgetFactory
{
	public function create($form)
	{
		return new DateField($form);
	}
}
?>