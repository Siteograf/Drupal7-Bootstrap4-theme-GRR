<header id="header" xmlns="http://www.w3.org/1999/html">
    <div class="container ">
        <div class="row">

            <div class="col-md-2">
                <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                    </a>
                <?php endif; ?>

                <button class="navbar-toggler hidden-md-up pull-right"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapsingNavbar">
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
            </div>

            <div class="col-md-9 mt5">
                <div class="collapse navbar-toggleable-sm" id="collapsingNavbar">
                    <?php if (!empty($primary_nav) || !empty($secondary_nav)): ?>
                        <?php if (!empty($primary_nav)): ?>
                            <div id="navbar-main" class="nav navbar-nav clearfix">
                                <?php print render($primary_nav); ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>

            <?php if (!empty($page['topicons'])): ?>
                <div class="topicons col-md-1" >
                    <?php print render($page['topicons']); ?>
                </div>  <!-- /#sidebar-first -->
            <?php endif; ?>



        </div>
    </div>


</header>

<div id="h" class="hidden-sm-down">
    <?php print render($page['header']); ?>
</div> <!-- /#page-header -->

<div class="main-container <?php // print $container_class; ?>">


    <?php print render($title_prefix); ?>
    <?php if (!empty($title)): ?>
        <h1 class="page-header mb2rem"><span><?php print $title; ?></span></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if (!empty($page['sidebar_first'])): ?>
        <aside class="col-sm-3" role="complementary">
            <?php print render($page['sidebar_first']); ?>
        </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php // print $content_column_class; ?>>
        <?php if (!empty($page['highlighted'])): ?>
            <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>

        <?php // if (!empty($breadcrumb)): print $breadcrumb; endif; ?>

        <a id="main-content"></a>


        <?php print $messages; ?>

        <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
        <?php endif; ?>

        <?php if (!empty($page['help'])): ?>
            <?php print render($page['help']); ?>
        <?php endif; ?>

        <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
        <aside class="col-sm-3 sbrSecondWrapper" role="complementary">
            <?php print render($page['sidebar_second']); ?>
        </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>


</div>

<?php if (!empty($page['page_bottom_full'])): ?>
    <div class="bc1 pt3rem pb3rem center" role="complementary">
        <?php print render($page['page_bottom_full']); ?>
    </div>  <!-- /#page_bottom_full -->
<?php endif; ?>


<footer class=" <?php print $container_class; ?>">
    <div class="row footerWrapper pt3rem">
        <?php if (!empty($page['footer1'])): ?>
            <div class="col1 col-md-2">
                <?php print render($page['footer1']); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($page['footer2'])): ?>
            <div class="col2 col-md-4">
                <?php print render($page['footer2']); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($page['footer3'])): ?>
            <div class="col3 col-md-4">
                <?php print render($page['footer3']); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($page['footer4'])): ?>
            <div class="col4 col-md-2">
                <?php print render($page['footer4']); ?>
            </div>
        <?php endif; ?>
    </div>

</footer>
