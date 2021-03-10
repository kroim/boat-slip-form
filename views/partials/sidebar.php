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
            <li class="navigation__sub <?php if ($sidebar->menu == "data") echo 'navigation__sub--active'; ?>">
                <a href="javascript:"><i class="zwicon-database"></i> Slip Data <i class="zwicon-arrow-down"></i></a>
                <ul>
                    <?php if (isset($years) && count($years)) {
                        for ($side_index = 0; $side_index < count($years); $side_index++) { ?>
                            <li class="<?php if ($sidebar->sub_menu == $years[$side_index]['year']) echo 'navigation__active'; ?>">
                                <a href="<?php echo $base_url . '/slip-data?year=' . $years[$side_index]['year']; ?>"> <?php echo $years[$side_index]['year'] ?></a>
                            </li>
                        <?php }
                    } ?>
                </ul>
            </li>
            <li class="<?php if ($sidebar->menu == "manage-years") echo 'navigation__active'; ?>">
                <a href="<?php echo $base_url; ?>/manage-years"><i class="zwicon-cog"></i> Manage Years</a>
            </li>
        </ul>
    </div>
</aside>
