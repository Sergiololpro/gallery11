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
                <!-- <div class="tabs__tab" :class="{ 'active' : type == 0 }" @click="filter(0)">Все</div> -->
                <div class="tabs__tab" :class="{ 'active' : type == 1 }" data-id="1" @click="filter(1)">Акции</div>
                <div class="tabs__tab" :class="{ 'active' : type == 2 }" data-id="2" @click="filter(2)">Новости</div>
                <div class="tabs__tab" :class="{ 'active' : type == 3 }" data-id="3" @click="filter(3)">События</div>
                <div class="tabs__tab" :class="{ 'active' : type == 4 }" data-id="4" @click="filter(4)">Лекция</div>
                <div class="tabs__tab" :class="{ 'active' : type == 5 }" data-id="5" @click="filter(5)">Презентация</div>
                <div class="tabs__tab" :class="{ 'active' : type == 6 }" data-id="6" @click="filter(6)">Открытие выставки</div>
                <div class="tabs__tab" :class="{ 'active' : type == 7 }" data-id="7" @click="filter(7)">Обучение</div>
            </div>
            <div v-if="f_elements.length" class="event__wp">
                <div class="event__wrp">
                    <a :href="f_elements[0].link" class="event__el event__el-top">
                        <div class="event__image" :style="`background-image: url(${f_elements[0].image})`"></div>
                        <div v-if="f_elements[0].type_text" class="event__label">{{ f_elements[0].type_text }}</div>
                        <div class="event__content">
                            <div class="event__top">
                            <div class="event__date">{{ f_elements[0].date }}</div>
                                <h3 class="event__h3">{{ f_elements[0].title }}</h3>
                            </div>
                            <div v-html="f_elements[0].text" class="event__text"></div>
                        </div>
                    </a>
                    <a v-if="f_elements.length > 1" :href="f_elements[1].link" class="event__el">
                        <div class="event__image" :style="`background-image: url(${f_elements[1].image})`"></div>
                        <div v-if="f_elements[1].type_text" class="event__label">{{ f_elements[1].type_text }}</div>
                        <div class="event__content">
                            <div class="event__top">
                            <div class="event__date">{{ f_elements[1].date }}</div>
                                <h3 class="event__h3">{{ f_elements[1].title }}</h3>
                            </div>
                            <div v-html="f_elements[1].text" class="event__text"></div>
                        </div>
                    </a>
                </div>
                <div v-if="f_elements.length > 2" class="news">
                    <a :href="f_elements[2].link" class="news__el">
                        <div class="news__image" :style="`background-image: url(${f_elements[2].image})`">
                            <div v-if="f_elements[2].type_text" class="news__label">{{ f_elements[2].type_text }}</div>
                        </div>
                        <div class="news__content">
                            <div class="news__date">{{ f_elements[2].date }}</div>
                            <h3 class="news__h3">{{ f_elements[2].title }}</h3>
                            <div v-html="f_elements[2].text" class="news__text"></div>
                        </div>
                    </a>
                    <template v-if="f_elements.length > 3">
                        <a :href="f_elements[3].link" class="news__el">
                            <div class="news__image" :style="`background-image: url(${f_elements[3].image})`">
                                <div v-if="f_elements[3].type_text" class="news__label">{{ f_elements[3].type_text }}</div>
                            </div>
                            <div class="news__content">
                                <div class="news__date">{{ f_elements[3].date }}</div>
                                <h3 class="news__h3">{{ f_elements[3].title }}</h3>
                                <div v-html="f_elements[3].text" class="news__text"></div>
                            </div>
                        </a>
                    </template>
                    <template v-if="f_elements.length > 4">
                        <a :href="f_elements[4].link" class="news__el">
                            <div class="news__image" :style="`background-image: url(${f_elements[4].image})`">
                                <div v-if="f_elements[4].type_text" class="news__label">{{ f_elements[4].type_text }}</div>
                            </div>
                            <div class="news__content">
                                <div class="news__date">{{ f_elements[4].date }}</div>
                                <h3 class="news__h3">{{ f_elements[4].title }}</h3>
                                <div v-html="f_elements[4].text" class="news__text"></div>
                            </div>
                        </a>
                    </template>
                </div>
            </div>
            <div v-if="f_elements.length > 5" class="event__wp">
                <div class="event__wrp">
                    <a :href="f_elements[5].link" class="event__el event__el-top">
                        <div class="event__image" :style="`background-image: url(${f_elements[5].image})`"></div>
                        <div v-if="f_elements[5].type_text" class="event__label">{{ f_elements[5].type_text }}</div>
                        <div class="event__content">
                            <div class="event__top">
                            <div class="event__date">{{ f_elements[5].date }}</div>
                                <h3 class="event__h3">{{ f_elements[5].title }}</h3>
                            </div>
                            <div v-html="f_elements[5].text" class="event__text"></div>
                        </div>
                    </a>
                    <a v-if="f_elements.length > 6" :href="f_elements[6].link" class="event__el">
                        <div class="event__image" :style="`background-image: url(${f_elements[6].image})`"></div>
                        <div v-if="f_elements[6].type_text" class="event__label">{{ f_elements[6].type_text }}</div>
                        <div class="event__content">
                            <div class="event__top">
                            <div class="event__date">{{ f_elements[6].date }}</div>
                                <h3 class="event__h3">{{ f_elements[6].title }}</h3>
                            </div>
                            <div v-html="f_elements[6].text" class="event__text"></div>
                        </div>
                    </a>
                </div>
                <div v-if="f_elements.length > 7" class="news">
                    <a :href="f_elements[7].link" class="news__el">
                        <div class="news__image" :style="`background-image: url(${f_elements[7].image})`">
                            <div v-if="f_elements[7].type_text" v-if="f_elements[7].type_text" class="news__label">{{ f_elements[7].type_text }}</div>
                        </div>
                        <div class="news__content">
                            <div class="news__date">{{ f_elements[7].date }}</div>
                            <h3 class="news__h3">{{ f_elements[7].title }}</h3>
                            <div v-html="f_elements[7].text" class="news__text"></div>
                        </div>
                    </a>
                    <template v-if="f_elements.length > 8">
                        <a :href="f_elements[8].link" class="news__el">
                            <div class="news__image" :style="`background-image: url(${f_elements[8].image})`">
                                <div v-if="f_elements[8].type_text" class="news__label">{{ f_elements[8].type_text }}</div>
                            </div>
                            <div class="news__content">
                                <div class="news__date">{{ f_elements[8].date }}</div>
                                <h3 class="news__h3">{{ f_elements[8].title }}</h3>
                                <div v-html="f_elements[8].text" class="news__text"></div>
                            </div>
                        </a>
                    </template>
                    <template v-if="f_elements.length > 9">
                        <a :href="f_elements[9].link" class="news__el">
                            <div class="news__image" :style="`background-image: url(${f_elements[9].image})`">
                                <div v-if="f_elements[9].type_text" class="news__label">{{ f_elements[9].type_text }}</div>
                            </div>
                            <div class="news__content">
                                <div class="news__date">{{ f_elements[9].date }}</div>
                                <h3 class="news__h3">{{ f_elements[9].title }}</h3>
                                <div v-html="f_elements[9].text" class="news__text"></div>
                            </div>
                        </a>
                    </template>
                </div>
            </div>
            <div v-if="f_elements.length > 10" class="event__wp">
                <div class="event__wrp event__wrp">
                    <a :href="f_elements[10].link" class="event__el">
                        <div class="event__image" :style="`background-image: url(${f_elements[10].image})`"></div>
                        <div v-if="f_elements[10].type_text" class="event__label">{{ f_elements[10].type_text }}</div>
                        <div class="event__content">
                            <div class="event__top">
                            <div class="event__date">{{ f_elements[10].date }}</div>
                                <h3 class="event__h3">{{ f_elements[10].title }}</h3>
                            </div>
                            <div v-html="f_elements[10].text" class="event__text"></div>
                        </div>
                    </a>
                    <a v-if="f_elements.length > 11" :href="f_elements[11].link" class="event__el event__el-top">
                        <div class="event__image" :style="`background-image: url(${f_elements[11].image})`"></div>
                        <div v-if="f_elements[11].type_text" class="event__label">{{ f_elements[11].type_text }}</div>
                        <div class="event__content">
                            <div class="event__top">
                            <div class="event__date">{{ f_elements[11].date }}</div>
                                <h3 class="event__h3">{{ f_elements[11].title }}</h3>
                            </div>
                            <div v-html="f_elements[11].text" class="event__text"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div v-if="!more" class="button button-banner button-down" @click="loadMore()">Показать еще</div>
            <div v-if="more" class="event__more">
                <div v-if="f_elements.length > 12" class="event__wp">
                    <div class="event__wrp">
                        <a :href="f_elements[12].link" class="event__el event__el-top">
                            <div class="event__image" :style="`background-image: url(${f_elements[12].image})`"></div>
                            <div v-if="f_elements[12].type_text" class="event__label">{{ f_elements[12].type_text }}</div>
                            <div class="event__content">
                                <div class="event__top">
                                <div class="event__date">{{ f_elements[12].date }}</div>
                                    <h3 class="event__h3">{{ f_elements[12].title }}</h3>
                                </div>
                                <div v-html="f_elements[12].text" class="event__text"></div>
                            </div>
                        </a>
                        <a v-if="f_elements.length > 13" :href="f_elements[13].link" class="event__el">
                            <div class="event__image" :style="`background-image: url(${f_elements[13].image})`"></div>
                            <div v-if="f_elements[13].type_text" class="event__label">{{ f_elements[13].type_text }}</div>
                            <div class="event__content">
                                <div class="event__top">
                                <div class="event__date">{{ f_elements[13].date }}</div>
                                    <h3 class="event__h3">{{ f_elements[13].title }}</h3>
                                </div>
                                <div v-html="f_elements[13].text" class="event__text"></div>
                            </div>
                        </a>
                    </div>
                    <div v-if="f_elements.length > 14" class="news">
                        <a :href="f_elements[14].link" class="news__el">
                            <div class="news__image" :style="`background-image: url(${f_elements[14].image})`">
                                <div v-if="f_elements[14].type_text" class="news__label">{{ f_elements[14].type_text }}</div>
                            </div>
                            <div class="news__content">
                                <div class="news__date">{{ f_elements[14].date }}</div>
                                <h3 class="news__h3">{{ f_elements[14].title }}</h3>
                                <div v-html="f_elements[14].text" class="news__text"></div>
                            </div>
                        </a>
                        <template v-if="f_elements.length > 15">
                            <a :href="f_elements[15].link" class="news__el">
                                <div class="news__image" :style="`background-image: url(${f_elements[15].image})`">
                                    <div v-if="f_elements[15].type_text" class="news__label">{{ f_elements[15].type_text }}</div>
                                </div>
                                <div class="news__content">
                                    <div class="news__date">{{ f_elements[15].date }}</div>
                                    <h3 class="news__h3">{{ f_elements[15].title }}</h3>
                                    <div v-html="f_elements[15].text" class="news__text"></div>
                                </div>
                            </a>
                        </template>
                        <template v-if="f_elements.length > 16">
                            <a :href="f_elements[16].link" class="news__el">
                                <div class="news__image" :style="`background-image: url(${f_elements[16].image})`">
                                    <div v-if="f_elements[16].type_text" class="news__label">{{ f_elements[16].type_text }}</div>
                                </div>
                                <div class="news__content">
                                    <div class="news__date">{{ f_elements[16].date }}</div>
                                    <h3 class="news__h3">{{ f_elements[16].title }}</h3>
                                    <div v-html="f_elements[16].text" class="news__text"></div>
                                </div>
                            </a>
                        </template>
                    </div>
                </div>
                <div v-if="f_elements.length > 17" class="event__wp">
                    <div class="event__wrp">
                        <a :href="f_elements[17].link" class="event__el event__el-top">
                            <div class="event__image" :style="`background-image: url(${f_elements[17].image})`"></div>
                            <div v-if="f_elements[17].type_text" class="event__label">{{ f_elements[17].type_text }}</div>
                            <div class="event__content">
                                <div class="event__top">
                                <div class="event__date">{{ f_elements[17].date }}</div>
                                    <h3 class="event__h3">{{ f_elements[17].title }}</h3>
                                </div>
                                <div v-html="f_elements[17].text" class="event__text"></div>
                            </div>
                        </a>
                        <a v-if="f_elements.length > 18" :href="f_elements[18].link" class="event__el">
                            <div class="event__image" :style="`background-image: url(${f_elements[18].image})`"></div>
                            <div v-if="f_elements[18].type_text" class="event__label">{{ f_elements[18].type_text }}</div>
                            <div class="event__content">
                                <div class="event__top">
                                <div class="event__date">{{ f_elements[18].date }}</div>
                                    <h3 class="event__h3">{{ f_elements[18].title }}</h3>
                                </div>
                                <div v-html="f_elements[18].text" class="event__text"></div>
                            </div>
                        </a>
                    </div>
                    <div v-if="f_elements.length > 19" class="news">
                        <a :href="f_elements[19].link" class="news__el">
                            <div class="news__image" :style="`background-image: url(${f_elements[19].image})`">
                                <div v-if="f_elements[19].type_text" class="news__label">{{ f_elements[19].type_text }}</div>
                            </div>
                            <div class="news__content">
                                <div class="news__date">{{ f_elements[19].date }}</div>
                                <h3 class="news__h3">{{ f_elements[19].title }}</h3>
                                <div v-html="f_elements[19].text" class="news__text"></div>
                            </div>
                        </a>
                        <template v-if="f_elements.length > 20">
                            <a :href="f_elements[20].link" class="news__el">
                                <div class="news__image" :style="`background-image: url(${f_elements[20].image})`">
                                    <div v-if="f_elements[20].type_text" class="news__label">{{ f_elements[20].type_text }}</div>
                                </div>
                                <div class="news__content">
                                    <div class="news__date">{{ f_elements[20].date }}</div>
                                    <h3 class="news__h3">{{ f_elements[20].title }}</h3>
                                    <div v-html="f_elements[20].text" class="news__text"></div>
                                </div>
                            </a>
                        </template>
                        <template v-if="f_elements.length > 21">
                            <a :href="f_elements[21].link" class="news__el">
                                <div class="news__image" :style="`background-image: url(${f_elements[21].image})`">
                                    <div v-if="f_elements[21].type_text" class="news__label">{{ f_elements[21].type_text }}</div>
                                </div>
                                <div class="news__content">
                                    <div class="news__date">{{ f_elements[21].date }}</div>
                                    <h3 class="news__h3">{{ f_elements[21].title }}</h3>
                                    <div v-html="f_elements[21].text" class="news__text"></div>
                                </div>
                            </a>
                        </template>
                    </div>
                </div>
                <div v-if="f_elements.length > 22" class="event__wp">
                    <div class="event__wrp event__wrp">
                        <a :href="f_elements[22].link" class="event__el">
                            <div class="event__image" :style="`background-image: url(${f_elements[22].image})`"></div>
                            <div v-if="f_elements[22].type_text" class="event__label">{{ f_elements[22].type_text }}</div>
                            <div class="event__content">
                                <div class="event__top">
                                <div class="event__date">{{ f_elements[22].date }}</div>
                                    <h3 class="event__h3">{{ f_elements[22].title }}</h3>
                                </div>
                                <div v-html="f_elements[22].text" class="event__text"></div>
                            </div>
                        </a>
                        <a v-if="f_elements.length > 23" :href="f_elements[23].link" class="event__el event__el-top">
                            <div class="event__image" :style="`background-image: url(${f_elements[23].image})`"></div>
                            <div v-if="f_elements[23].type_text" class="event__label">{{ f_elements[23].type_text }}</div>
                            <div class="event__content">
                                <div class="event__top">
                                <div class="event__date">{{ f_elements[23].date }}</div>
                                    <h3 class="event__h3">{{ f_elements[23].title }}</h3>
                                </div>
                                <div v-html="f_elements[23].text" class="event__text"></div>
                            </div>
                        </a>
                    </div>
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
            text: "test test <br/>22222",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-1.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 1",
            date: "02 августа 2022",
            text: "test test <br/>22222",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-1.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 1",
            date: "02 августа 2022",
            text: "test test <br/>22222",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-1.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 1",
            date: "02 августа 2022",
            text: "test test <br/>22222",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-1.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 1",
            date: "02 августа 2022",
            text: "test test <br/>22222",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-1.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 1",
            date: "02 августа 2022",
            text: "test test <br/>22222",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-1.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 1",
            date: "02 августа 2022",
            text: "test test <br/>22222",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-1.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 1",
            date: "02 августа 2022",
            text: "test test <br/>22222",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-1.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 1",
            date: "02 августа 2022",
            text: "test test <br/>22222",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-1.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 1",
            date: "02 августа 2022",
            text: "test test <br/>22222",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-1.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 1",
            date: "02 августа 2022",
            text: "test test <br/>22222",
            type: "1",
            type_text: "Акция",
            image: "img/event__image-1.jpg",
            link: "/",
        },
        {
            title: "Выставка Юрия Первушина 1",
            date: "02 августа 2022",
            text: "test test <br/>22222",
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