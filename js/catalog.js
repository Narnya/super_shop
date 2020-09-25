/**
 * 2 класса
 * Catalog - будет заниматься задачи управления
 * Product - будет отрисовывать карточку товара в каталог
 * 
 */ 

class Catalog{
    constructor(){
        this.$catalog = document.querySelector('.catalog');
        this.$catalogList = this.$catalog.querySelector('.catalog-list');
        this.$pagination = this.$catalog.querySelector('.pagination');
        this.products = [];
        this.$loader = this.$catalog.querySelector('.loader');
        //this.categoryid = this.$catalog.getAttribute('data-category-id');
        this.categoryId = this.$catalog.dataset.categoryId;
    }
    load(active = 1){
        //Будет загружать данные по ajax
        //после загрузки будет взывать метод render
        this.removeCatalogData();
        this.showLoader();
        const xhr = new XMLHttpRequest();
        console.log('active', active);
        xhr.open('GET', `/handlers/handler_catalog.php?category_id=${this.categoryId}&active=${active}`);
        xhr.send();

        xhr.addEventListener('load', ()=>{
            const response = JSON.parse(xhr.response);
            console.log(response);
            response.products.forEach((item) => {
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
            this.renderPagination(response.pagination);
        });
    }


 
    showLoader(){
        this.$loader.classList.add('show');
    }

    hideLoader(){
        this.$loader.classList.remove('show');
    }

    removeCatalogData(){
        
        /**
         * Методы очистки элементов
         * числоваяа переменная = 0;
         * строковая переменная = '';
         * переменная с массивом arr = [];
         */
        this.products = [];
        this.$catalogList.innerHTML = '';
        this.$pagination.innerHTML = '';


    }

    // Рендер пагинации
    renderPagination(pagination){
        // const $pagination = this.$catalog.querySelector('.pagination');
        for (let i=1; i <= pagination.count; i++){
            let $paginationItem = document.createElement('div');
            $paginationItem.classList.add('page');
            $paginationItem.innerHTML = i;
            $paginationItem.dataset.page = i;
            // Добдавляем класс active для текущей страницы
            if (i === pagination.active){
                $paginationItem.classList.add('active');
            }
            //Удаляем класс active
            this.$pagination.append($paginationItem);
            $paginationItem.addEventListener('click', (e) =>{
                // получили элемент, по которому кликнули
                const target = e.target;
                this.$pagination.querySelectorAll('.page').forEach(item => {
                    item.classList.remove('active');
                });
                //Добавить класс active
                target.classList.add('active')
                console.log(target.dataset.page);
                //вызываем загрузку каталога
                this.load(target.dataset.page);
            });
        }
    }

    render(){
        //отрисовывает карточку товара
        // const $catalogList = this.$catalog.querySelector('.catalog-list');
        this.products.forEach((item) =>{
            this.$catalogList.append(item.getElement());
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
