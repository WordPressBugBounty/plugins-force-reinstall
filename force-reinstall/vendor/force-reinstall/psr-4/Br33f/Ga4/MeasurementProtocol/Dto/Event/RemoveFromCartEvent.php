<?php
/**
 * User: Damian Zamojski (br33f)
 * Date: 25.06.2021
 * Time: 13:33
 */

namespace Rich4rdMuvirimi\ForceReinstall\Vendor\Br33f\Ga4\MeasurementProtocol\Dto\Event;

use Rich4rdMuvirimi\ForceReinstall\Vendor\Br33f\Ga4\MeasurementProtocol\Dto\Parameter\AbstractParameter;
use Rich4rdMuvirimi\ForceReinstall\Vendor\Br33f\Ga4\MeasurementProtocol\Enum\ErrorCode;
use Rich4rdMuvirimi\ForceReinstall\Vendor\Br33f\Ga4\MeasurementProtocol\Exception\ValidationException;

/**
 * Class RemoveFromCartEvent
 * @package Rich4rdMuvirimi\ForceReinstall\Vendor\Br33f\Ga4\MeasurementProtocol\Dto\Event
 * @method string getCurrency()
 * @method RemoveFromCartEvent setCurrency(string $currency)
 * @method float getValue()
 * @method RemoveFromCartEvent setValue(float $value)
 */
class RemoveFromCartEvent extends ItemBaseEvent
{
    private $eventName = 'remove_from_cart';

    /**
     * AddToCartEvent constructor.
     * @param AbstractParameter[] $paramList
     */
    public function __construct(array $paramList = [])
    {
        parent::__construct($this->eventName, $paramList);
    }

    public function validate()
    {
        parent::validate();

        if (!empty($this->getValue())) {
            if (empty($this->getCurrency())) {
                throw new ValidationException('Field "currency" is required if "value" is set', ErrorCode::VALIDATION_FIELD_REQUIRED, 'currency');
            }
        }

        return true;
    }
}