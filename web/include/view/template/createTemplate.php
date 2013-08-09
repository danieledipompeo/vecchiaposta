<?php


/**
 * Singleton per la creazione dei template in automatico
 */
require_once(realpath(dirname(__FILE__)) . '/../../entity.inc.php');

class CreateTemplate {
	
	static public $instance;
	
	private function __construct(){}
	
	static function getInstance(){
		if (! isset($instance) )
			self::$instance = new CreateTemplate();
		return self::$instance;
	}
	
	/**
	 *
	 * autogenazione del file report per le entity
	 *
	 * @access private
	 */
	private function presentationFieldToArray($entity) {
		$fieldPresentation;
		// presentation field to array
		$presentation = $entity->getPresentation();
		$fieldsPresentation = explode(", ", $presentation['fields'] );
			
		foreach($fieldsPresentation as $presField){
			$fieldPresentation .= "{\$instance";
			$fieldPresentation .= "->".$presField;
			$fieldPresentation .= "} ";
		}
		return $fieldPresentation;
	}
	
	private function fieldsReportEntity($entity){
		$fieldsEntity = "{if !\$instances}\n";
		$fieldsEntity .="<ul>\n";
		$fieldsEntity .="{foreach from=\$instances item=instance}\n";
		$fieldsEntity .="<li>\n";
		$fieldsEntity .= self::presentationFieldToArray($entity).": ";
		$fieldsEntity .="<a href=\"{\$service_link}?action=emit&preload=1&value={\$instance->".$entity->fields[0]->name."}\">Modifica</a>\n";
		$fieldsEntity .="</li>\n";
		$fieldsEntity .="{/foreach}\n";
		$fieldsEntity .= "</ul>\n";
		$fieldsEntity .= "{else}\n";
		$fieldsEntity .= "<h1>NON CI SONO ". $entity->name."</h1>\n";
		$fieldsEntity .= "{/if}\n";
	
		return $fieldsEntity;
	}
	
	private function fieldsEntity($entity,$multiple=false){
	
		$fieldsEntity .="<h2>".self::presentationFieldToArray($entity)."</h2>";
		$fieldsEntity = "{if \$instances != null || \$instance != null}\n";
		$fieldsEntity .="<ul>\n";
		if($multiple) $fieldsEntity .= "{foreach from=\$instances item=instance}\n";
		foreach($entity->fields as $field)
		{
			$fieldsEntity .="<li>";
			$fieldsEntity .= "{$field->name}: ";
			$fieldsEntity .= "{";
			$fieldsEntity .= "\$instance->".$field->name;
			$fieldsEntity .= "}";
			$fieldsEntity .="</li>\n";
		}
		if($multiple) $fieldsEntity .= "{/foreach}\n";
		$fieldsEntity .= "</ul>\n";
		$fieldsEntity .= "{else}\n";
		$fieldsEntity .= "<h1>NON CI SONO ". $entity->name."</h1>\n";
		$fieldsEntity .= "{/if}\n";
	
		return $fieldsEntity;
	}
	
	/**
	 * 
	 * @param unknown $entity
	 * @param string $multiple
	 * @return string
	 */
	private function searchFieldsEntity($entity)
	{
		$fieldsEntity .= '{if $instances != null || $instance != null}';
		$fieldsEntity .='<h2 class="inl_blk mb15 mt15">'.$entity->entityName.'</h2>';
		$fieldsEntity .='<ul>';
		$fieldsEntity .='{foreach from=$instances item=instance}';
		$fieldsEntity .='<li class="border_bm">';
		$fieldsEntity .='<a class="tooltip" title="visualizza {$instance->nome}" href="{$script_link}{$instance->'.$entity->fields[0]->name.'}">'.self::presentationFieldToArray($entity).'</a>';
		$fieldsEntity .='</li>';
		$fieldsEntity .='{/foreach}';
		$fieldsEntity .= '</ul>';
		$fieldsEntity .= "{/if}\n";
	
		return $fieldsEntity;
	}

	/**
	 * Default building multiple template
	 * @param string $multiple
	 * @param string $report
	 */
	static function createTemplateMultiple($entity)
	{
		/**
		 * CREAZIONE MULTIPLE
		 */
		$multipleTemplate = new Skinlet("autotemplate");
		$templateAsString = $multipleTemplate->get();

        /**
         * create a multiple folder
         */
        if(! is_dir(Settings::getSkin()."/multiple/") ) {
            mkdir(Settings::getSkin().'/multiple/', 0777);
        }

		$filename = Settings::getSkin()."/multiple/".$entity->name."_multiple.html";

		if(!file_exists($filename)){
			$templateAsString = preg_replace("~\[(?!entity_content\d+_\d+).+\]~Us",
					"<!-- MODIFICA QUESTE LINEE-->\nMULTIPLE TEMPLATE STANDARD; <h1>".$entity->name."</h1>".self::fieldsEntity($entity,true)."<!-- MODIFICA QUESTELINEE-->\n",$templateAsString);
			$handleFile = fopen($filename, "w");
			fwrite($handleFile, $templateAsString);
			fclose($handleFile);
		}
	}
	
	/**
	 * Default building single template
	 * @param string $multiple
	 * @param string $report
	 */
	static function createTemplateSingle($entity){
		/**
		 * CREAZIONE SINGLE
		 */
		$singleTemplate = new Skinlet("autotemplate");
		$templateAsString = $singleTemplate->get();

        if(! is_dir(Settings::getSkin()."/single/") ) {
            mkdir(Settings::getSkin().'/single/', 0777);
        }

        $filename = Settings::getSkin()."/single/".$entity->name."_single.html";

        if(!file_exists($filename)){
			$templateAsString = preg_replace("~\[(?!entity_content\d+_\d+).+\]~Us",
					"<!-- MODIFICA QUESTE LINEE-->\nSINGLE TEMPLATE STANDARD; <h1>".$entity->name."</h1>\n".self::fieldsEntity($entity)."\n<!-- MODIFICA QUESTE LINEE-->\n",$templateAsString);
			$handleFile = fopen($filename, "w");
			fwrite($handleFile, $templateAsString);
			fclose($handleFile);
		}
	}
	
	/**
	 * Default building report template
	 * @param string $multiple
	 * @param string $report
	 */
	static function createTemplateReport($entity){
		/**
		 * CREZIONE REPORT
		 */
		$reportTemplate = new Skinlet("autotemplate");
		$templateAsString = $reportTemplate->get();

        if(! is_dir(Settings::getSkin()."/report/") ) {
            mkdir(Settings::getSkin().'/report/', 0777);
        }

		$filename = Settings::getSkin()."/report/".$entity->name."_report.html";
		
		if(!file_exists($filename)){
			$templateAsString = preg_replace("~\[(?!entity_content\d+_\d+).+\]~Us",
					"\n<!-- MODIFICA QUESTA LINEA-->".self::fieldsReportEntity($entity)."\n<!-- MODIFICA QUESTA LINEA-->\n",$templateAsString);
			$handleFile = fopen($filename, "w");
			fwrite($handleFile, $templateAsString);
			fclose($handleFile);
		}
	}
	
	/**
	 * 
	 * @param unknown $entity
	 */
	static function createTemplateSearch($entity){
		/**
		 * CREAZIONE TEMPLATE PER LA RICERCA
		 */
		$searchTemplate = new Skinlet("autotemplate");
		$templateAsString = $searchTemplate->get();

        if(! is_dir(Settings::getSkin()."/search/") ) {
            mkdir(Settings::getSkin().'/search/', 0777);
        }

        $filename = Settings::getSkin()."/search/".$entity->name."_search.html";
		
		if(!file_exists($filename)){
			$templateAsString = preg_replace("~\[(?!entity_content\d+_\d+).+\]~Us",
					"\n<!-- MODIFICA QUESTA LINEA-->".self::searchFieldsEntity($entity)."\n<!-- MODIFICA QUESTA LINEA-->\n",$templateAsString);
			$handleFile = fopen($filename, "w");
			fwrite($handleFile, $templateAsString);
			fclose($handleFile);
		}
	}
}