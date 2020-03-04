<?php

namespace FondOfSpryker\Zed\ShipmentDeliveryNoteExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ShipmentDeliveryNoteTransfer;

interface ShipmentDeliveryNotePostSavePluginInterface
{
    /**
     * Specification:
     * - Plugin is triggered after shipment delivery note object is saved.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ShipmentDeliveryNoteTransfer $shipmentDeliveryNoteTransfer
     *
     * @return \Generated\Shared\Transfer\ShipmentDeliveryNoteTransfer
     */
    public function postSave(
        ShipmentDeliveryNoteTransfer $shipmentDeliveryNoteTransfer
    ): ShipmentDeliveryNoteTransfer;
}
