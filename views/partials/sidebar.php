<?php ?>
<aside class="sidebar ">
    <div class="scrollbar">
        <ul class="navigation">

            <li class="<?php if ($sidebar->menu == "dashboard") echo 'navigation__active'; ?>">
                <a href="<?php echo $base_url; ?>"><i class="zwicon-home"></i> Marina Slips</a>
            </li>
            <li class="<?php if ($sidebar->menu == "costs") echo 'navigation__active'; ?>">
                <a href="<?php echo $base_url; ?>/costs"><i class="zwicon-dollar-sign"></i> Costs</a>
            </li>
            <li class="<?php if ($sidebar->menu == "data") echo 'navigation__active'; ?>">
                <a href="<?php echo $base_url; ?>/data"><i class="zwicon-database"></i> Slip Data</a>
            </li>
        </ul>
    </div>
</aside>
