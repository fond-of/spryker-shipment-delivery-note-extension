<?php

namespace FondOfSpryker\Zed\ShipmentDeliveryNoteExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ShipmentDeliveryNoteTransfer;

interface ShipmentDeliveryNotePreSavePluginInterface
{
    /**
     * Specification:
     * - Plugin is triggered before shipment delivery note object is saved.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ShipmentDeliveryNoteTransfer $shipmentDeliveryNoteTransfer
     *
     * @return \Generated\Shared\Transfer\ShipmentDeliveryNoteTransfer
     */
    public function preSave(
        ShipmentDeliveryNoteTransfer $shipmentDeliveryNoteTransfer
    ): ShipmentDeliveryNoteTransfer;
}
