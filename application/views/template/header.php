<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <a href="<?php echo base_url();?>" class="logo">Perjalanan Dinas Luar Negeri</a>
    <div class="top-menu">
      <ul class="nav pull-right top-menu">
            <li>
                <form method="POST" action="<?php echo base_url();?>login" >
                    <input type="hidden" name="content" value="logout">
                    <a class="btn btn-default" style="margin-top:14px;background-color:#282828;border:none;color:white;" onclick="$(this).closest('form').submit()">Logout</a>
                </form>
            </li>
      </ul>
    </div>
</header>