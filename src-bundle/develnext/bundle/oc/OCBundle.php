<?php
namespace develnext\bundle\oc;

use ide\bundle\AbstractBundle;
use ide\bundle\AbstractJarBundle;
use ide\project\Project;

/**
 * Class OCBundle
 */
class OCBundle extends AbstractJarBundle
{
    public function onAdd(Project $project, AbstractBundle $owner = null)
    {
        parent::onAdd($project, $owner);
    }

    public function onRemove(Project $project, AbstractBundle $owner = null)
    {
        parent::onRemove($project, $owner);
    }
}
