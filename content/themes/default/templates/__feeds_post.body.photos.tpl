<div class="pg_wrapper clearfix">
  {if $_post['photos_num'] == 1}
    <div class="pg_1x {if $_post['photos'][0]['blur']}x-blured{/if}">
      <a href="{$system['system_url']}/photos/{$_post['photos'][0]['photo_id']}" class="js_lightbox" data-id="{$_post['photos'][0]['photo_id']}" data-image="{$system['system_uploads']}/{$_post['photos'][0]['source']}" data-context="{if in_array($_post['post_type'], ['product', 'offer'])}post{else}album{/if}">
        <img src="{$system['system_uploads']}/{$_post['photos'][0]['source']}">
      </a>
    </div>
  {else}
    <div class="swiper">
    <div class="swiper-wrapper mySwiper">
      
      {foreach $_post['photos'] as $photo}
      <div class="swiper-slide {if $photo['blur']}x-blured{/if}" style="background-image:url('{$system['system_uploads']}/{$photo['source']}');"></div>
      {/foreach}
    </div>

    <div class="swiper-pagination"></div>
  </div>
  {/if}
</div>
 