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
