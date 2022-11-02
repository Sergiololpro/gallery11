<?php include 'includes/header.php'; ?>

<div class="page">
    <div class="wrapper">
        <div class="breadcrumbs">
            <a href="#">Главная</a>
            <span class="breadcrumbs__sep">//</span>
            <span>Cобытия</span>
        </div>
        <h1 class="title title-new">Cобытия</h1>
        <div id="vue">
            <div class="tabs">
                <div class="tabs__tab active" @click="filter(0)">Все</div>
                <div class="tabs__tab" @click="filter(1)">Акции</div>
                <div class="tabs__tab" @click="filter(2)">Новости</div>
                <div class="tabs__tab" @click="filter(3)">События</div>
                <div class="tabs__tab" @click="filter(4)">Лекция</div>
                <div class="tabs__tab" @click="filter(5)">Презентация</div>
                <div class="tabs__tab" @click="filter(6)">Открытие выставки</div>
                <div class="tabs__tab" @click="filter(7)">Обучение</div>
            </div>
            <div v-if="f_elements.length" class="event__wp">
                <div class="event__wrp">
                    <a :href="f_elements[0].link" class="event__el event__el-top">
                        <div class="event__image" :style="`background-image: url(${f_elements[0].image})`"></div>
                        <div class="event__label">{{ f_elements[0].type_text }}</div>
                        <div class="event__content">
                            <div class="event__top">
                            <div class="event__date">{{ f_elements[0].date }}</div>
                                <h3 class="event__h3">{{ f_elements[0].title }}</h3>
                            </div>
                            <div class="event__text">{{ f_elements[0].text }}</div>
                        </div>
                    </a>
                    <div v-if="f_elements.length > 1" class="event__col">
                        <a :href="f_elements[1].link" class="event__el">
                            <div class="event__image" :style="`background-image: url(${f_elements[1].image})`"></div>
                            <div class="event__label">{{ f_elements[1].type_text }}</div>
                            <div class="event__content">
                                <div class="event__top">
                                <div class="event__date">{{ f_elements[1].date }}</div>
                                    <h3 class="event__h3">{{ f_elements[1].title }}</h3>
                                </div>
                                <div class="event__text">{{ f_elements[1].text }}</div>
                            </div>
                        </a>
                        <template v-if="f_elements.length > 2">
                            <a :href="f_elements[2].link" class="event__el">
                                <div class="event__image" :style="`background-image: url(${f_elements[2].image})`"></div>
                                <div class="event__label">{{ f_elements[2].type_text }}</div>
                                <div class="event__content">
                                    <div class="event__top">
                                    <div class="event__date">{{ f_elements[2].date }}</div>
                                        <h3 class="event__h3">{{ f_elements[2].title }}</h3>
                                    </div>
                                    <div class="event__text">{{ f_elements[2].text }}</div>
                                </div>
                            </a>
                        </template>
                    </div>
                </div>
                <div v-if="f_elements.length > 3" class="news">
                    <a :href="f_elements[3].link" class="news__el">
                        <div class="news__image" :style="`background-image: url(${f_elements[3].image})`">
                            <div class="news__label">{{ f_elements[3].type_text }}</div>
                        </div>
                        <div class="news__content">
                            <div class="news__date">{{ f_elements[3].date }}</div>
                            <h3 class="news__h3">{{ f_elements[3].title }}</h3>
                            <div class="news__text">{{ f_elements[3].text }}</div>
                        </div>
                    </a>
                    <template v-if="f_elements.length > 4">
                        <a :href="f_elements[4].link" class="news__el">
                            <div class="news__image" :style="`background-image: url(${f_elements[4].image})`">
                                <div class="news__label">{{ f_elements[4].type_text }}</div>
                            </div>
                            <div class="news__content">
                                <div class="news__date">{{ f_elements[4].date }}</div>
                                <h3 class="news__h3">{{ f_elements[4].title }}</h3>
                                <div class="news__text">{{ f_elements[4].text }}</div>
                            </div>
                        </a>
                    </template>
                    <template v-if="f_elements.length > 5">
                        <a :href="f_elements[5].link" class="news__el">
                            <div class="news__image" :style="`background-image: url(${f_elements[5].image})`">
                                <div class="news__label">{{ f_elements[5].type_text }}</div>
                            </div>
                            <div class="news__content">
                                <div class="news__date">{{ f_elements[5].date }}</div>
                                <h3 class="news__h3">{{ f_elements[5].title }}</h3>
                                <div class="news__text">{{ f_elements[5].text }}</div>
                            </div>
                        </a>
                    </template>
                </div>
            </div>
            <div v-if="f_elements.length > 6" class="event__wp">
                <div class="event__wrp">
                    <a :href="f_elements[6].link" class="event__el event__el-top">
                        <div class="event__image" :style="`background-image: url(${f_elements[6].image})`"></div>
                        <div class="event__label">{{ f_elements[6].type_text }}</div>
                        <div class="event__content">
                            <div class="event__top">
                            <div class="event__date">{{ f_elements[6].date }}</div>
                                <h3 class="event__h3">{{ f_elements[6].title }}</h3>
                            </div>
                            <div class="event__text">{{ f_elements[6].text }}</div>
                        </div>
                    </a>
                    <div v-if="f_elements.length > 7" class="event__col">
                        <a :href="f_elements[1].link" class="event__el">
                            <div class="event__image" :style="`background-image: url(${f_elements[7].image})`"></div>
                            <div class="event__label">{{ f_elements[7].type_text }}</div>
                            <div class="event__content">
                                <div class="event__top">
                                <div class="event__date">{{ f_elements[7].date }}</div>
                                    <h3 class="event__h3">{{ f_elements[7].title }}</h3>
                                </div>
                                <div class="event__text">{{ f_elements[7].text }}</div>
                            </div>
                        </a>
                        <template v-if="f_elements.length > 8">
                            <a :href="f_elements[8].link" class="event__el">
                                <div class="event__image" :style="`background-image: url(${f_elements[8].image})`"></div>
                                <div class="event__label">{{ f_elements[8].type_text }}</div>
                                <div class="event__content">
                                    <div class="event__top">
                                    <div class="event__date">{{ f_elements[8].date }}</div>
                                        <h3 class="event__h3">{{ f_elements[8].title }}</h3>
                                    </div>
                                    <div class="event__text">{{ f_elements[8].text }}</div>
                                </div>
                            </a>
                        </template>
                    </div>
                </div>
                <div v-if="f_elements.length > 9" class="news">
                    <a :href="f_elements[9].link" class="news__el">
                        <div class="news__image" :style="`background-image: url(${f_elements[9].image})`">
                            <div class="news__label">{{ f_elements[9].type_text }}</div>
                        </div>
                        <div class="news__content">
                            <div class="news__date">{{ f_elements[9].date }}</div>
                            <h3 class="news__h3">{{ f_elements[9].title }}</h3>
                            <div class="news__text">{{ f_elements[9].text }}</div>
                        </div>
                    </a>
                    <template v-if="f_elements.length > 10">
                        <a :href="f_elements[10].link" class="news__el">
                            <div class="news__image" :style="`background-image: url(${f_elements[10].image})`">
                                <div class="news__label">{{ f_elements[10].type_text }}</div>
                            </div>
                            <div class="news__content">
                                <div class="news__date">{{ f_elements[10].date }}</div>
                                <h3 class="news__h3">{{ f_elements[10].title }}</h3>
                                <div class="news__text">{{ f_elements[10].text }}</div>
                            </div>
                        </a>
                    </template>
                    <template v-if="f_elements.length > 11">
                        <a :href="f_elements[11].link" class="news__el">
                            <div class="news__image" :style="`background-image: url(${f_elements[11].image})`">
                                <div class="news__label">{{ f_elements[11].type_text }}</div>
                            </div>
                            <div class="news__content">
                                <div class="news__date">{{ f_elements[11].date }}</div>
                                <h3 class="news__h3">{{ f_elements[11].title }}</h3>
                                <div class="news__text">{{ f_elements[11].text }}</div>
                            </div>
                        </a>
                    </template>
                </div>
            </div>
            <div v-if="f_elements.length > 12" class="event__wp">
                <div class="event__wrp event__wrp">
                    <div class="event__col">
                        <a :href="f_elements[12].link" class="event__el">
                            <div class="event__image" :style="`background-image: url(${f_elements[12].image})`"></div>
                            <div class="event__label">{{ f_elements[12].type_text }}</div>
                            <div class="event__content">
                                <div class="event__top">
                                <div class="event__date">{{ f_elements[12].date }}</div>
                                    <h3 class="event__h3">{{ f_elements[12].title }}</h3>
                                </div>
                                <div class="event__text">{{ f_elements[12].text }}</div>
                            </div>
                        </a>
                        <template v-if="f_elements.length > 13">
                            <a :href="f_elements[13].link" class="event__el">
                                <div class="event__image" :style="`background-image: url(${f_elements[13].image})`"></div>
                                <div class="event__label">{{ f_elements[13].type_text }}</div>
                                <div class="event__content">
                                    <div class="event__top">
                                    <div class="event__date">{{ f_elements[13].date }}</div>
                                        <h3 class="event__h3">{{ f_elements[13].title }}</h3>
                                    </div>
                                    <div class="event__text">{{ f_elements[13].text }}</div>
                                </div>
                            </a>
                        </template>
                    </div>
                    <a v-if="f_elements.length > 14" :href="f_elements[14].link" class="event__el event__el-top">
                        <div class="event__image" :style="`background-image: url(${f_elements[14].image})`"></div>
                        <div class="event__label">{{ f_elements[14].type_text }}</div>
                        <div class="event__content">
                            <div class="event__top">
                            <div class="event__date">{{ f_elements[14].date }}</div>
                                <h3 class="event__h3">{{ f_elements[14].title }}</h3>
                            </div>
                            <div class="event__text">{{ f_elements[14].text }}</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var elements = [
        {
            title: "Выставка Юрия Первушина 1",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-1.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 2",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "2",
            type_text: "Новость",
            image: "img/event__image-2.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 3",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "3",
            type_text: "Событие",
            image: "img/event__image-3.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 4",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "4",
            type_text: "Лекция",
            image: "img/event__image-4.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 5",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "5",
            type_text: "Презентация",
            image: "img/event__image-5.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 6",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "6",
            type_text: "Открытие выставки",
            image: "img/event__image-6.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 7",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "7",
            type_text: "Обучение",
            image: "img/event__image-7.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 8",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-8.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 9",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "2",
            type_text: "Новость",
            image: "img/event__image-9.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 10",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "3",
            type_text: "Событие",
            image: "img/event__image-10.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 11",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "3",
            type_text: "Событие",
            image: "img/event__image-1.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 12",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "3",
            type_text: "Событие",
            image: "img/event__image-2.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 13",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "4",
            type_text: "Событие",
            image: "img/event__image-3.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 14",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "7",
            type_text: "Обучение",
            image: "img/event__image-4.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 15",
            date: "02 августа 2022",
            text: "При поддержке Анны Кирен",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-5.jpg",
            link: "/",
        },
    ]
</script>


<?php include 'includes/footer.php'; ?>