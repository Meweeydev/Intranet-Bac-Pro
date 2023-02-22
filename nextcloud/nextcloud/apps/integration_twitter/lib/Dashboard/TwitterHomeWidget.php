<?php
/**
 * @copyright Copyright (c) 2020 Julien Veyssier <eneiluj@posteo.net>
 *
 * @author Julien Veyssier <eneiluj@posteo.net>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Twitter\Dashboard;

use OCP\Dashboard\IWidget;
use OCP\IL10N;
use OCP\IURLGenerator;
use OCP\Util;

use OCA\Twitter\AppInfo\Application;

class TwitterHomeWidget implements IWidget {

	/** @var IL10N */
	private $l10n;
	/**
	 * @var IURLGenerator
	 */
	private $url;

	public function __construct(IL10N $l10n,
								IURLGenerator $url) {
		$this->l10n = $l10n;
		$this->url = $url;
	}

	/**
	 * @inheritDoc
	 */
	public function getId(): string {
		return 'twitter_home_timeline';
	}

	/**
	 * @inheritDoc
	 */
	public function getTitle(): string {
		return $this->l10n->t('Twitter home timeline');
		}

	/**
	 * @inheritDoc
	 */
	public function getOrder(): int {
		return 10;
	}

	/**
	 * @inheritDoc
	 */
	public function getIconClass(): string {
		return 'icon-twitter';
	}

	/**
	 * @inheritDoc
	 */
	public function getUrl(): ?string {
		return $this->url->linkToRoute('settings.PersonalSettings.index', ['section' => 'connected-accounts']);
	}

	/**
	 * @inheritDoc
	 */
	public function load(): void {
		Util::addScript(Application::APP_ID, Application::APP_ID . '-dashboardHomeTimeline');
		Util::addStyle(Application::APP_ID, 'dashboard');
	}
}
