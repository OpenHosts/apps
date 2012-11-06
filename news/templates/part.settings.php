<div id="feed_settings" 
		ng-controller="SettingsController" 
		ng-class="{expanded: isExpanded()}">
	<ul class="controls">
		<li title="<?php p($l->t('Add feed or folder')) ?>">
			<button ng-click="toggleAdd()">
				<img class="svg" 
				     src="<?php print_unescaped(link_to('news', 'img/add.svg')) ?>" 
				     alt="<?php p($l->t('Add Feed/Folder')) ?>" /></button>
		</li>
		<li class="view show_all" 
		    ng-show="getShowAll()"
		    ng-click="setShowAll(false)"
		    title="<?php p($l->t('Show everything')); ?>">
			<button></button>
		</li>
		<li class="view show_unread" 
			ng-show="!getShowAll()"
			ng-click="setShowAll(true)"
			title="<?php p($l->t('Show only unread')); ?>">
			<button></button>
		</li>
		<li style="float: right">
			<button id="settingsbtn" 
			        title="<?php p($l->t('Settings')); ?>"
			        ng-click="toggleSettings()">
			    <img class="svg" 
			         src="<?php print_unescaped(image_path('core','actions/settings.png')); ?>" 
			         alt="<?php p($l->t('Settings')); ?>"   />
			</button>
		</li>
	</ul>

	<div class="open_add" ng-show="addIsShown()">
		<fieldset class="personalblock">
			<legend><strong><?php p($l->t('Add Folder')); ?></strong></legend>
			<input type="text" ng-model="folderName" placeholder="<?php p($l->t('Name')); ?>" required="required">
			<button title="<?php p($l->t('Add')); ?>" ng-click="addFolder(folderName)"><?php p($l->t('Add')); ?></button>
		</fieldset>
		<fieldset class="personalblock">
			<legend><strong><?php p($l->t('Add Subscription')); ?></strong></legend>
			<input type="text" ng-model="feedUrl" placeholder="<?php p($l->t('Adress')); ?>" required="required">
			<button title="<?php p($l->t('Add')); ?>" ng-click="addFeed(feedUrl)"><?php p($l->t('Add')); ?></button>
		</fieldset>
	</div>

	<div class="open_settings" ng-show="settingsAreShown()">
		<fieldset class="personalblock">
			<legend><strong><?php p($l->t('Subscribelet')); ?></strong></legend>
			<p><?php
				require_once OC_App::getAppPath('news') .'/templates/subscribelet.php';
				createSubscribelet();
			?>
			</p>
		</fieldset>
		<fieldset class="personalblock">
			<legend><strong><?php p($l->t('Export')); ?></strong></legend>
			<button title="<?php p($l->t('Download OPML')); ?>"><?php p($l->t('Download OPML')); ?></button>
		</fieldset>

	</div>
</div>
