<form action="{$product.add_to_cart_url}" method="post" class="add-to-cart-or-refresh" style="text-align:center;  margin-top: 10px;">
  <input type="hidden" name="token" value="{$static_token}">
  <input type="hidden" name="id_product" value="{$product.id_product}">
  <input type="hidden" name="id_product_attribute" value="{$product.id_product_attribute|default:0}">
  <input type="hidden" name="qty" value="1">
  <button type="submit" class="btn btn-primary add-to-cart" data-button-action="add-to-cart">
    {l s='Ajouter au panier' d='Shop.Theme.Actions'}
  </button>
</form>

