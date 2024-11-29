  {if isset($post.sources) && count($post.sources) > 0}
    <div class="swiper">
      <div class="swiper-wrapper mySwiper">
        {foreach $post.sources as $source}
          <div class="swiper-slide {if $post['blur']}x-blured{/if}" style="background-image:url('{$system['system_uploads']}/{$source}');"></div>
        {/foreach}
      </div>
    </div>
  {/if}
