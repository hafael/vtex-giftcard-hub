<?php
/**
 * Part of the VTEX GiftCardProvider package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    VTEX GiftCardHub
 * @version    0.0.1
 * @author     VerdeIT
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017-2017, VerdeIT
 * @link       https://github.com/hafael/vtex-giftcard-hub
 */

namespace Hafael\VTEX\GiftCardHub\Api;


class Providers extends Api
{

    /**
     * Users who viewed the specified item also viewed the returned items. At most 15 items are returned, results are sorted by relevance.
     *
     * @return array|mixed
     */
    public function listAllProviders()
    {
        return $this->_get("giftcardproviders");
    }

    /**
     * Users who viewed the specified item also viewed the returned items. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardProvideID
     * @return array|mixed
     */
    public function getProvider($giftCardProviderID)
    {
        return $this->_get("giftcardproviders/".$giftCardProviderID);
    }

    /**
     * Users who rated the specified item 'good' did the same with items returned by this method. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardProviderID
     * @param $serviceURL
     * @param $oauthProvider
     * @param $appToken
     * @param $preAuthEnabled
     * @param $cancelEnabled
     * @return array|mixed
     */
    public function createProvider($giftCardProviderID, string $serviceURL, string $oauthProvider, string $appToken, bool $preAuthEnabled = true, bool $cancelEnabled = true)
    {
        return $this->_post("giftcardproviders/".$giftCardProviderID, [], [
            'serviceUrl' => $serviceURL,
            'oauthProvider' => $oauthProvider,
            'preAuthEnabled' => $preAuthEnabled,
            'cancelEnabled' => $cancelEnabled,
            'appToken' => $appToken,
        ]);
    }

    /**
     * Users who viewed the specified item also viewed the returned items. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardProvideID
     * @return array|mixed
     */
    public function deleteProvider($giftCardProviderID)
    {
        return $this->_delete("giftcardproviders/".$giftCardProviderID);
    }

}