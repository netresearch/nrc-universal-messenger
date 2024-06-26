<?php

/**
 * This file is part of the package netresearch/universal-messenger.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function (): void {
    $columns = [
        'universal_messenger_channels' => [
            'exclude'     => true,
            'label'       => 'LLL:EXT:universal_messenger/Resources/Private/Language/locallang.xlf:be_groups.universal_messenger_channels',
            'description' => 'LLL:EXT:universal_messenger/Resources/Private/Language/locallang.xlf:be_groups.universal_messenger_channels.description',
            'config'      => [
                'type'          => 'select',
                'renderType'    => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_universalmessenger_domain_model_newsletterchannel',
            ],
        ],
    ];

    ExtensionManagementUtility::addTCAcolumns(
        'be_groups',
        $columns
    );

    ExtensionManagementUtility::addToAllTCAtypes(
        'be_groups',
        '--div--;LLL:EXT:universal_messenger/Resources/Private/Language/locallang.xlf:common.universalMessenger,universal_messenger_channels'
    );
});
