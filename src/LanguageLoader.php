<?php


namespace KUMaxim\PullCommentsOtherPages;


class LanguageLoader {
	public function load_text_domain() {
		load_plugin_textdomain( 'pull-comments-other-pages', false, B2P_LANGUAGES_DIRECTORY_PATH );
	}
}
