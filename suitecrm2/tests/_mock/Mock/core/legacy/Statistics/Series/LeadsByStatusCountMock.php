<?php
/**
 * SuiteCRM is a customer relationship management program developed by SalesAgility Ltd.
 * Copyright (C) 2021 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SALESAGILITY, SALESAGILITY DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see http://www.gnu.org/licenses.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */


namespace App\Tests\_mock\Mock\core\legacy\Statistics\Series;

use App\Module\Leads\Statistics\Series\LeadsByStatusCount;
use App\Tests\_mock\Helpers\core\legacy\Data\DBQueryResultsMocking;
use SugarBean;

/**
 * Class LeadsByStatusCountMock
 * @package Mock\Core\Legacy\Statistics\Series
 */
class LeadsByStatusCountMock extends LeadsByStatusCount
{
    use DBQueryResultsMocking;

    /**
     * @var SugarBean
     */
    public $bean;

    /**
     * @inheritDoc
     */
    protected function getBean(string $legacyName)
    {
        return $this->bean;
    }

    /**
     * @param SugarBean $bean
     */
    public function setBean(SugarBean $bean): void
    {
        $this->bean = $bean;
    }

    /**
     * @inheritDoc
     */
    protected function startLegacyApp(string $currentModule = ''): void
    {
    }

    /**
     * @inheritDoc
     */
    protected function runQuery(array $query, $bean): array
    {
        return $this->getAllMockQueryResults();
    }
}
