<?php
require_once(realpath(dirname(__FILE__)) . '/../../../../include/view/widgets/FormWidget.php');

/**
 * @access public
 * @author Di Pompeo Sacco
 * @package include.view.widgets.forms
 */
class FileField extends FormWidget {

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
		$field_to_modify=$this->form->entity->getField($v['name']);
		/**
		 * Observation, this time the field is a file so four fields are involved in the operation,
		 * for this reason four variables must be initialized
		*/
		$field_to_modify_type=$this->form->entity->getField($v['name']."_type");
		$field_to_modify_filename=$this->form->entity->getField($v['name']."_filename");
		$field_to_modify_reference=$this->form->entity->getField($v['name']."_reference");
		
		if ($preload) {
			if (isset($this->form->helpers[$v['name']])) {
				$content .= "    <td>{$v["label"]} <a href=# title=\"{$this->form->helpers[$v['name']]}\"><img src=\"img/form/help.gif\" class=\"helper\"></a> </td>\n";
			} else {
				$content .= "<label class=\"cells mb20\" {$v["label"]}</label>\n";
			}
			$content .= "<input class=\"inl_blks cells mb20\" type=\"file\" name=\"{$v['name']}\"/> <input type=\"hidden\" name=\"{$v['name']}_hidden\" value=\"{$field_to_modify_filename}\" />\n";
			if ($_REQUEST[$v['name']]) {
				switch ($field_to_modify_type) {
					case "image/jpeg":
					case "image/gif":
						/* IMAGE */
						$content .= " <div class=\"image-show\" id=\"{$v['name']}\" >\n<input type=\"text\" class=\"file\" value=\"".$field_to_modify_filename."\" disabled /><img src=\"img/beContent/show-gray.jpg\" onClick=\"image_show('{$v['name']}')\"><div id=\"{$v['name']}_img\">";
						$content .= "<span>".$field_to_modify_type."</span><br />\n<img class=\"left\" src=\"show.php?token=".md5($this->form->entity->name.$v['name'])."&id={$_REQUEST['value']}&width=188\">\n</div>\n</div>";
						$content .= "&nbsp; <input class=\"clear\" type=\"checkbox\" name=\"{$v['name']}_delete\" value=\"*\"> ".Message::getInstance()->getMessage(MSG_FILE_DELETE);
						break;
					case "video/x-flv":
					case "application/octet-stream":
						/*
						FLASH VIDEO FLV
						The extension should be checked since anything can be
						uploaded here.
						*/
						$content .= " <div class=\"image-show\" id=\"{$v['name']}\" >\n<input type=\"text\" class=\"file\" value=\"".$field_to_modify_filename."\" disabled /><img src=\"img/beContent/show-gray.jpg\" onClick=\"image_show('{$v['name']}')\">\n<div id=\"{$v['name']}_img\">\n";
						$src= "show.php?token=".md5($this->form->entity->name.$v['name'])."&id={$_REQUEST['value']}";
						$width = 200;
						$height = 150;
						$content .= "<script type=\"text/javascript\">\nAC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','{$width}','height','{$height}','id','FLVPlayer2','src','FLVPlayer_Progressive','flashvars','&MM_ComponentVersion=1&skinName=includes/flv/players/player-unov&streamName={$src}&autoPlay=false&autoRewind=false','scale','noscale','name','FLVPlayer','salign','lt','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','FLVPlayer_Progressive' );\n</script>\n<noscript>\n<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0\" width=\"{$width}\" height=\"{$height}\" id=\"FLVPlayer2\">\n<param name=\"movie\" value=\"FLVPlayer_Progressive.swf\" />\n<param name=\"salign\" value=\"lt\" />\n<param name=\"scale\" value=\"noscale\" />\n<param name=\"FlashVars\" value=\"&MM_ComponentVersion=1&skinName=includes/flv/players/player-unov&streamName={$src}&autoPlay=false&autoRewind=false\" />\n<embed src=\"FLVPlayer_Progressive.swf\" flashvars=\"&MM_ComponentVersion=1&skinName=includes/flv/players/player-unov&streamName={$src}&autoPlay=false&autoRewind=false\"  scale=\"noscale\" width=\"{$width}\" height=\"{$height}\" name=\"FLVPlayer\" salign=\"LT\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\" />\n</object>\n</noscript>\n";
						$content .= "</div>\n";
						break;
					default:
						/* UNKNOWN MIME TYPE */
						$content .= " <div class=\"image-show\" id=\"{$v['name']}\" ><input type=\"text\" class=\"file\" value=\"".$field_to_modify_filename."\" disabled /><a target=\"_blank\" title=\"{$field_to_modify_filename}\" href=\"show.php?token=".md5($this->form->entity->name.$v['name'])."&id={$_REQUEST['value']}\"><img src=\"img/beContent/show-gray-link.jpg\"></a></div>";
						$content .= "<input class=\"clear\" type=\"checkbox\" name=\"{$v['name']}_delete\" value=\"*\"> ".Message::getInstance()->getMessage(MSG_FILE_DELETE);
						break;
				}
				$content .= "\n";
			} else {
				/* EMPTY */
				$content .= " <div class=\"image-show\" ><input type=\"text\" class=\"file\" value=\"".Message::getInstance()->getMessage(MSG_FILE_NONE)."\" disabled /><img src=\"img/beContent/show-gray-disabled.jpg\"></div> </td>\n";
				#$content .= "(".Message::getInstance()->getMessage(MSG_FILE_NONE).") </td>\n";
			}
		} else {
			if (isset($this->form->helpers[$v['name']])) {
				$content .= "    <td>{$v["label"]} <a href=# title=\"{$this->form->helpers[$v['name']]}\"><img src=\"img/form/help.gif\" class=\"helper\"></a> </td>\n";
			} else {
				$content .= " <label class=\"cells\">{$v["label"]}</label>\n";
			}
			$content .= "<input type=\"file\" name=\"{$v['name']}\" />\n";
		}
		return $content;
	}
}

/**
 * Factory for the checkbox widget
 * @author nicola
 *
 */

class FileFieldFactory implements FormWidgetFactory
{
	public function create($form)
	{
		return new FileField($form);
	}
}
?>