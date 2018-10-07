<?php
namespace ViewItems\PageViews;

use ViewItems\ViewTemplate;

/**
 * View class displaying the library in the form of a bookcase with each volume
 * rendered as a spine.
 */
class DisplayLibraryBookcaseView extends ViewTemplate {
	/**
	 * Constructs the CSS using the available properties.
	 */
	protected function constructCSS () {
		$output =
		'<style>
			.spine_anchor {
				margin-right: 4px;
				display: inline-block;
			}
			
			.spine_anchor img {
				max-height: 480px;
			}
		</style>';
		
		return ($output);
	}
	
	/**
	 * Constructs the HTML using the available properties.
	 */
	protected function constructHTML () {
		$output = '';
		
		foreach ($this->getSpines () as $series => $volumes) {
			$link = $this->getSeriesLinks ()[$series];
			
			foreach ($volumes as $spine) {
				$output .=
				'<a class="spine_anchor" href="'.$link.'">
					<img src="'.$spine.'" />
				</a>';
			}
		}
		
		return ($output);
	}
	
	/**
	 * Constructs the javascript using the available properties.
	 */
	protected function constructJavascript () {
		$output =
		'<script>
		
		</script>';
		
		return ($output);
	}
	
	protected function setSpines (array $spines) {
		$this->spines = $spines;
	}
	
	protected function setSeriesLinks (array $series_links) {
		$this->series_links = $series_links;
	}
	
	protected function getSpines () {
		return ($this->spines);
	}
	
	protected function getSeriesLinks () {
		return ($this->series_links);
	}
}
