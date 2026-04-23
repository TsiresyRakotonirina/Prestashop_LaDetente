{assign var="progress" value=($total / $threshold * 100)}
{if $progress > 100}{assign var="progress" value=100}{/if}

<div class="cart-free-shipping">
  <p>
    {if $total >= $threshold}
      <strong>Félicitations ! Livraison gratuite atteinte</strong>
    {else}
      Il vous reste {$threshold - $total|number_format:2:",":" "} € pour bénéficier de la livraison gratuite.
    {/if}
  </p>

  <div class="progress">
    <div class="progress-bar 
                {if $total >= $threshold}bg-success{else}bg-info{/if}" 
         role="progressbar" 
         style="width: {$progress}%;" 
         aria-valuenow="{$progress}" 
         aria-valuemin="0" 
         aria-valuemax="100">
      {$progress|round}%
    </div>
  </div>
</div>
