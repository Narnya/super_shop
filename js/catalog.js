/**
 * 2 класса
 * Catalog - будет заниматься задачи управления
 * Product - будет отрисовывать карточку товара в каталог
 * 
 */ 

class Catalog{
    constructor(){
        this.$catalog = document.querySelector('.catalog');
        this.products = [];
        this.$loader = this.$catalog.querySelector('.loader');
        //this.categoryid = this.$catalog.getAttribute('data-category-id');
        this.categoryId = this.$catalog.dataset.categoryId;
    }
    load(){
        //Будет загружать данные по ajax
        //после загрузки будет взывать метод render
        this.showLoader();
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `/handlers/handler_catalog.php?category_id=${this.categoryId}`);
        xhr.send();

        xhr.addEventListener('load', ()=>{
            const response = JSON.parse(xhr.response);
            console.log(response);
            response.forEach((item) => {
                this.products.push(
                    new Product(
                        item.id, 
                        item.image_url, 
                        item.name, 
                        item.description, 
                        item.price
                    )
                );
            });
            this.render();
        });
    }

    showLoader(){
        this.$loader.classList.add('show');
    }

    hideLoader(){
        this.$loader.classList.remove('show');
    }

    render(){
        //отрисовывает карточку товара
        const $catalogList = this.$catalog.querySelector('.catalog-list');
        this.products.forEach((item) =>{
            $catalogList.append(item.getElement());
        });

        this.hideLoader();
    };
};

class Product{
    constructor(id, img_url, name, description, price){
        this.id = id;
        this.img_url = img_url;
        this.name = name;
        this.description = description;
        this.price = price;
    }
    getElement(){
        let $catalogItem = document.createElement('a');
        $catalogItem.href = `/product.php?id=${this.id}`;
        $catalogItem.classList.add('catalog-item');
        console.log(this.img_url);
        $catalogItem.innerHTML = `
            <div class="catalog-item__img" style="background-image: url(${this.img_url})"></div>
            <div class="catalog-item__name">${this.name}</div>
            <div class="catalog-item__price">${this.price} руб.</div>
        `;
        return $catalogItem;
    }
}

const catalog = new Catalog();
catalog.load();
