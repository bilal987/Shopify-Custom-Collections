<div class="brand_product">
<div class="st_pro_cat hot_prod">
    <div class="container">
    <div class="main_heading">
        <h2>Shop By Brand</h2>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        {% for block in section.blocks %}
        <li class="nav-item" role="presentation">
          <a href="#tab{{ forloop.index }}" class="nav-link {% if forloop.first %}active{% endif %}" id="tab{{ forloop.index }}" data-bs-toggle="tab" data-bs-target="#tab-{{ forloop.index }}" type="button" role="tab" aria-controls="home" aria-selected="true">
            {{ block.settings.heading }}
          </a>
        </li>
           {% endfor %}
      </ul>
    
    <div class="tab-content" id="myTabContent">
  {% for block in section.blocks %}
        <div class="tab-pane fade {% if forloop.first %}show active{% endif %}" id="tab-{{ forloop.index }}" role="tabpanel" aria-labelledby="tab{{ forloop.index }}">
    <div class="row" >
      {% assign collection_data = block.settings.collection %}
      {% for product in collections[collection_data].products %}
   
            <div class="col-md-3 right_prod">
                <div class="product_box prod_box">
                    <a href="{{ product.url }}">
                    <div class="nws-pdp-images" >
                    {% for image in product.images %}
                        <img src="{{ image.src | product_img_url: '500x' }}" />
                    {% endfor %}
                    </div>
                    
                    <div class="prod_desc prod_heading">
                    <h3>{{ product.title }}</h3>
                    </div>
                    </a>
         
                </div>
            </div>
      {% endfor %}
      
        </div>
    </div>
    {% endfor %}
    </div>
    </div>
    </div>
</div>
  
  {% schema %}
  {
  "name": "St Brand Product",
  "settings": [
 
  ],
  
  "blocks": [
       {
      "type": "product-brand",
      "name": "Product Brand",
      "settings": [
      {
        "type": "text",
        "id": "heading",
        "label": "Add Brand Heading"
      },
      {
        "type": "collection",
        "id": "collection",
        "label": "Select Collection"
      }
      ]
    }
  ],
  
  "presets": [
  {
  "name": "St Brand Product",
  "category": "St Brand Product"
  }
  ]
  }
  {% endschema %}



<script>
if( (window.location.href).replace( (window.location.origin) , '')  ==  '/pages/featured-brands/#tab1'  ){
jQuery('#tab1').tab('show');
}
        
if( (window.location.href).replace( (window.location.origin) , '')  ==  '/pages/featured-brands/#tab2'  ){
    jQuery('#tab2').tab('show');
}
if( (window.location.href).replace( (window.location.origin) , '')  ==  '/pages/featured-brands/#tab3'  ){
    jQuery('#tab3').tab('show');
}
if( (window.location.href).replace( (window.location.origin) , '')  ==  '/pages/featured-brands/#tab4'  ){
    jQuery('#tab4').tab('show');
} 
if( (window.location.href).replace( (window.location.origin) , '')  ==  '/pages/featured-brands/#tab5'  ){
    jQuery('#tab5').tab('show');
}            
        
if( (window.location.href).replace( (window.location.origin) , '')  ==  '/pages/featured-brands/#tab6'  ){
    jQuery('#tab6').tab('show');
}        
        
if( (window.location.href).replace( (window.location.origin) , '')  ==  '/pages/featured-brands/#tab12'  ){
    jQuery('#tab12').tab('show');
}
if( (window.location.href).replace( (window.location.origin) , '')  ==  '/pages/featured-brands/#tab9'  ){
    jQuery('#tab9').tab('show');
}
if( (window.location.href).replace( (window.location.origin) , '')  ==  '/pages/featured-brands/#tab10'  ){
    jQuery('#tab10').tab('show');
}
if( (window.location.href).replace( (window.location.origin) , '')  ==  '/pages/featured-brands/#tab11'  ){
    jQuery('#tab11').tab('show');
}        
if( (window.location.href).replace( (window.location.origin) , '')  ==  '/pages/featured-brands/#tab7'  ){
    jQuery('#tab7').tab('show');
}        
if( (window.location.href).replace( (window.location.origin) , '')  ==  '/pages/featured-brands/#tab8'  ){
    jQuery('#tab8').tab('show');
}
if( (window.location.href).replace( (window.location.origin) , '')  ==  '/pages/featured-brands/#tab13'  ){
    jQuery('#tab13').tab('show');
}

jQuery(document).ready(function() {
    if (location.hash) {
        $("a[href='" + location.hash + "']").tab("show");
    }
    jQuery(document.body).on("click", "a[data-toggle='tab']", function(event) {
        location.hash = this.getAttribute("href");
    });
});
jQuery(window).on("popstate", function() {
    var anchor = location.hash || jQuery("a[data-toggle='tab']").first().attr("href");
    jQuery("a[href='" + anchor + "']").tab("show");
});   
</script>


<style>
.st_pro_cat .nav-tabs {
border: none;
margin-bottom: 50px;
text-align: center;
justify-content: center;
}
.st_pro_cat .nav-tabs .nav-item a {
    border: 1px solid #fff;
    text-align: center;
    margin: 0 10px 20px;
    font-family: Retroica;
    font-size: 20px;
    font-weight: 400;
    text-transform: uppercase;
    padding: 14px 25px;
    border-radius: 6px;
    color: #fff;
}
.st_pro_cat .nav-tabs .nav-item a.active {
    background-color: #00284c;
    color: #fff !important;
    border-color: #00284c !important;
}
</style>
