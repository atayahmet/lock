<?php
namespace BeatSwitch\Lock\Contracts;

/**
 * A contract to identify an implementation to store permissions to
 *
 * Drivers can both be persistent or static depending on their implementation.
 * A default, static ArrayDriver implementation comes with this package.
 */
interface Driver
{
    /**
     * Returns all the permissions for a caller
     *
     * @param \BeatSwitch\Lock\Contracts\Caller $caller
     * @return \BeatSwitch\Lock\Contracts\Permission[]
     */
    public function getPermissions(Caller $caller);

    /**
     * Stores a new permission into the driver for a caller
     *
     * @param \BeatSwitch\Lock\Contracts\Caller $caller
     * @param \BeatSwitch\Lock\Contracts\Permission
     * @return void
     */
    public function storePermission(Caller $caller, Permission $permission);

    /**
     * Removes a permission from the driver for a caller
     *
     * @param \BeatSwitch\Lock\Contracts\Caller $caller
     * @param \BeatSwitch\Lock\Contracts\Permission
     * @return void
     */
    public function removePermission(Caller $caller, Permission $permission);

    /**
     * Checks if a permission is stored for a user.
     *
     * @param \BeatSwitch\Lock\Contracts\Caller $caller
     * @param \BeatSwitch\Lock\Contracts\Permission
     * @return bool
     */
    public function hasPermission(Caller $caller, Permission $permission);
}
