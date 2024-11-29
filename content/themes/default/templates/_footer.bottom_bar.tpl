<div class="footer-bottom-bar">
  <div class="container">
    <div class="footer-bottom-bar-links">
      <!-- watch -->
      {if $system['reels_enabled']}
        <div class="link {if $page == 'reels'}active{/if}">
          <a href="{$system['system_url']}/reels">
          {include file='__svg_icons.tpl' icon="reels" class="header-icon {if $page == "reels"}active{/if}" width="32px" height="32px"}
          <!-- <div class="title">{__("Reels")}</div> -->
        </a>
      </div>
      {elseif $system['watch_enabled']}
      <div class="link {if $page == 'index' && $view == 'watch'}active{/if}">
        <a href="{$system['system_url']}/watch">
          {include file='__svg_icons.tpl' icon="watch" class="header-icon {if $page == "index" && $view == "watch"}active{/if}" width="32px" height="32px"}
          <!-- <div class="title">{__("Watch")}</div> -->
        </a>
      </div>
      {/if}
      <!-- watch -->
      <!-- home -->
      <div class="link {if $page == 'index' && $view == ''}active{/if}">
        <a href="{$system['system_url']}">
          {include file='__svg_icons.tpl' icon="header-home" class="header-icon {if $page == "index" && $view == ""}active{/if}" width="32px" height="32px"}
          <!-- <div class="title">{__("Home")}</div> -->
        </a>
      </div>
      <!-- home -->

      <!-- add -->
      {if $user->_data['can_publish_posts'] || $user->_data['can_go_live'] || $user->_data['can_add_stories'] || $user->_data['can_write_blogs'] || $user->_data['can_sell_products'] || $user->_data['can_raise_funding'] || $user->_data['can_create_ads'] || $user->_data['can_create_pages'] || $user->_data['can_create_groups'] || $user->_data['can_create_events']}
        <div class="link">
          <a class="dropdown" href="#" data-bs-toggle="dropdown" data-display="static">
            {include file='__svg_icons.tpl' icon="header-plus" class="header-icon" width="32px" height="32px"}
            <!-- <div class="title">{__("Add")}</div> -->
          </a>
          <div class="dropdown-menu dropdown-widget">
            <div class="js_scroller" data-slimScroll-height="360">
              <div class="footer-quick-adds">
                            {if $user->_data['can_add_reels']}
                  <div class="publisher-tools-tab attach js_publisher-tab" data-tab="reel">
                    <span class="js_x-uploader" data-handle="publisher" data-type="reel">
                      {include file='__svg_icons.tpl' icon="reels" class="main-icon mr5" width="24px" height="24px"}
                    </span>
                    {__("Upload Reel")}
                  </div>
              {/if}
              </div>
            </div>
          </div>
        </div>
      {/if}
      <!-- add -->

      <!-- search -->
      <div class="link {if $page == 'search'}active{/if}">
        <a href="{$system['system_url']}/search">
          {include file='__svg_icons.tpl' icon="header-search" class="header-icon {if $page == "search"}active{/if}" width="32px" height="32px"}
          <!-- <div class="title">{__("Search")}</div> -->
        </a>
      </div>
      <!-- search -->

      <!-- menu -->
      <div class="link user-link-bottom-menu">
        {include file='_user_menu.tpl' _as_widget=true }
      </div>
      <!-- menu -->

    </div>
  </div>
</div>