<?php

declare(strict_types=1);

namespace SimpleSAML\Module\saml\Error;

use SAML2\Constants;

/**
 * A SAML error indicating that passive authentication cannot be used.
 *
 * @author Jaime Pérez Crespo, UNINETT AS <jaime.perez@uninett.no>
 * @package SimpleSAMLphp
 */
class NoPassive extends \SimpleSAML\Module\saml\Error
{
    /**
     * NoPassive error constructor.
     *
     * @param string $responsible A string telling who is responsible for this error. Can be one of the following:
     *   - \SAML2\Constants::STATUS_RESPONDER: in case the error is caused by this SAML responder.
     *   - \SAML2\Constants::STATUS_REQUESTER: in case the error is caused by the SAML requester.
     * @param string|null $message A short message explaining why this error happened.
     * @param \Exception|null $cause An exception that caused this error.
     */
    public function __construct(string $responsible, string $message = null, \Exception $cause = null)
    {
        parent::__construct($responsible, Constants::STATUS_NO_PASSIVE, $message, $cause);
    }
}
