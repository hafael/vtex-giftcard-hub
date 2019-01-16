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
 * @package    VTEX GiftCard
 * @version    0.0.1
 * @author     VerdeIT
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017-2017, VerdeIT
 * @link       https://github.com/hafael/vtex-giftcard-hub
 */

namespace Hafael\VTEX\GiftCardHub\Api;


class GiftCards extends Api
{

    /**
     * Users who viewed the specified item also viewed the returned items. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardProviderID
     * @param array $data
     * @return array|mixed
     */
    public function createGiftCard($giftCardProviderID, array $data)
    {
        return $this->_post("giftcardproviders/".$giftCardProviderID."/giftcards", [], $data);
    }

    /**
     * Users who rated the specified item 'good' did the same with items returned by this method. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardProviderID
     * @return array|mixed
     */
    public function getAllGiftCards($giftCardProviderID)
    {
        return $this->_post("giftcardproviders/".$giftCardProviderID."/giftcards/_search");
    }

    /**
     * Users who bought the specified item also bought the items returned by this method. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardProviderID
     * @param $giftCardID
     * @return array|mixed
     */
    public function getGiftCard($giftCardProviderID, $giftCardID)
    {
        return $this->_get("giftcardproviders/".$giftCardProviderID."/giftcards/".$giftCardID);
    }

    /**
     * Users who viewed the specified item also viewed the returned items. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardProviderID
     * @param $giftCardID
     * @return array|mixed
     */
    public function getTransactions($giftCardProviderID, $giftCardID, $offset = 0, $perPage = 49)
    {
        return $this->_get("giftcardproviders/".$giftCardProviderID."/giftcards/".$giftCardID."/transactions");
    }

    /**
     * Users who viewed the specified item also viewed the returned items. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardProviderID
     * @param $giftCardID
     * @return array|mixed
     */
    public function getTransactionByID($giftCardProviderID, $giftCardID, $transactionID)
    {
        return $this->_get("giftcardproviders/".$giftCardProviderID."/giftcards/".$giftCardID."/transactions/".$transactionID);
    }

    /**
     * Users who rated the specified item 'good' did the same with items returned by this method. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardProviderID
     * @param $giftCardID
     * @param array $data
     * @return array|mixed
     */
    public function createTransaction($giftCardProviderID, $giftCardID, $data)
    {
        return $this->_post("giftcardproviders/".$giftCardProviderID."/giftcards/".$giftCardID."/transactions", [], $data);
    }

    /**
     * Users who viewed the specified item also viewed the returned items. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardProviderID
     * @param $giftCardID
     * @return array|mixed
     */
    public function getTransactionAuthorizations($giftCardProviderID, $giftCardID, $transactionID)
    {
        return $this->_get("giftcardproviders/".$giftCardProviderID."/giftcards/".$giftCardID."/transactions/".$transactionID."/authorization");
    }

    /**
     * Users who viewed the specified item also viewed the returned items. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardProviderID
     * @param $giftCardID
     * @return array|mixed
     */
    public function getTransactionCancellations($giftCardProviderID, $giftCardID, $transactionID)
    {
        return $this->_get("giftcardproviders/".$giftCardProviderID."/giftcards/".$giftCardID."/transactions/".$transactionID."/cancellations");
    }

    /**
     * Users who rated the specified item 'good' did the same with items returned by this method. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardProviderID
     * @param $giftCardID
     * @param array $data
     * @return array|mixed
     */
    public function cancelTransaction($giftCardProviderID, $giftCardID, $transactionID, $data)
    {
        return $this->_post("giftcardproviders/".$giftCardProviderID."/giftcards/".$giftCardID."/transactions/".$transactionID."/cancellations", [], $data);
    }

    /**
     * Users who viewed the specified item also viewed the returned items. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardID
     * @return array|mixed
     */
    public function getTransactionSettlements($giftCardProviderID, $giftCardID, $transactionID)
    {
        return $this->_get("giftcardproviders/".$giftCardProviderID."/giftcards/".$giftCardID."/transactions/".$transactionID."/settlements");
    }

    /**
     * Users who rated the specified item 'good' did the same with items returned by this method. At most 15 items are returned, results are sorted by relevance.
     *
     * @param $giftCardProviderID
     * @param $giftCardID
     * @param array $data
     * @return array|mixed
     */
    public function createTransactionSettlement($giftCardProviderID, $giftCardID, $transactionID, $data)
    {
        return $this->_post("giftcardproviders/".$giftCardProviderID."/giftcards/".$giftCardID."/transactions/".$transactionID."/settlements", [], $data);
    }

}