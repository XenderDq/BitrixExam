<?php

if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
?>

    <section class="recipes-hero top-section container">
        <div class="breadcrumbs">
            <div class="breadcrumbs-wrapper">
                <div class="breadcrumbs-wrapper__row"><a class="breadcrumbs__item" href="#">главная</a>
                    <div class="breadcrumbs__arrow"><svg width="9" height="14" viewbox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.501732 0.71693C0.688798 2.76241 1.82258 7.06302 8.00226 7.42407C8.43495 7.44882 8.66756 6.9815 8.3585 6.70488L1.3053 0.390819C0.992979 0.109838 0.465946 0.325304 0.501732 0.71693Z" fill="#F64653"></path>
                            <path d="M0.501732 13.2839C0.688798 11.2384 1.82258 6.9378 8.00226 6.57675C8.43495 6.552 8.66756 7.01934 8.3585 7.29595L1.3053 13.61C0.992979 13.8895 0.465946 13.6755 0.501732 13.2839Z" fill="#F64653"></path>
                        </svg></div>
                    <div class="breadcrumbs__current active">рецепты</div>
                </div>
            </div>
        </div>
        <div class="recipes-hero__top">
            <h1 class="recipes-hero__title">рецепты</h1>
            <div class="title-rombs">
                <div class="title-rombs__item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                        <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
                        <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
                        <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
                        <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
                    </svg></div>
                <div class="title-rombs__item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                        <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
                        <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
                        <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
                        <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
                    </svg></div>
            </div>
        </div>
        <div class="recipes-hero__activity">
            <div class="recipes-hero__activity-selects">
                <div class="recipes-hero__select desktop">
                    <div class="select-wrapper">
                        <div class="select"><select class="select__select" style="width: 100%" data-select-placeholder="Тип блюда">
                                <option value="" selected="selected" disabled="disabled"></option>
                                <option value="Сёмыч">Сёмыч</option>
                                <option value="Ладушка">Ладушка</option>
                            </select></div>
                    </div>
                </div>
                <div class="recipes-hero__select desktop">
                    <div class="select-wrapper">
                        <div class="select"><select class="select__select" style="width: 100%" data-select-placeholder="Время приготовления">
                                <option value="" selected="selected" disabled="disabled"></option>
                                <option value="Сёмыч">Сёмыч</option>
                                <option value="Ладушка">Ладушка</option>
                            </select></div>
                    </div>
                </div>
                <div class="recipes-hero__select desktop">
                    <div class="select-wrapper">
                        <div class="select"><select class="select__select" style="width: 100%" data-select-placeholder="Повод">
                                <option value="" selected="selected" disabled="disabled"></option>
                                <option value="Сёмыч">Сёмыч</option>
                                <option value="Ладушка">Ладушка</option>
                            </select></div>
                    </div>
                </div>
                <div class="catalog-hero__filters mobile" data-popup="catalog-filters">
                    <div class="catalog-hero__filters-icon"><svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.375 9H14.625" stroke="#0068FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9 14.625V3.375" stroke="#0068FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></div>
                    <div class="catalog-hero__filters-text">Фильтры</div>
                    <div class="catalog-hero__filters-circle"><span class="catalog-hero__filters-num">2</span></div>
                </div>
            </div>
            <div class="catalog-hero__reset desktop">
                <div class="catalog-hero__reset-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                        <path d="M4.01269 1.00335C4.01454 0.589137 3.68025 0.251856 3.26604 0.250008C2.85183 0.24816 2.51455 0.582445 2.5127 0.996654L2.50365 3.02568C2.50026 3.78054 2.49744 4.41017 2.55271 4.91635C2.61069 5.44728 2.74029 5.93661 3.06926 6.36169C3.15834 6.4768 3.25638 6.58449 3.36242 6.68379C3.42487 6.74227 3.49008 6.79784 3.55786 6.85029C3.98294 7.17926 4.47227 7.30886 5.0032 7.36684C5.50939 7.42211 6.13896 7.41929 6.89383 7.4159H6.89384L8.9229 7.40685C9.3371 7.405 9.67139 7.06772 9.66954 6.65351C9.66769 6.2393 9.33041 5.90501 8.9162 5.90686L6.93049 5.91572C6.12107 5.91933 5.57738 5.92062 5.16604 5.8757C5.13511 5.87232 5.10551 5.86873 5.07717 5.86494C5.49067 5.39871 5.95055 4.97451 6.44953 4.59962C7.99559 3.43804 9.91636 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12C2.75 11.5858 2.41421 11.25 2 11.25C1.58579 11.25 1.25 11.5858 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25C9.58034 1.25 7.34544 2.05032 5.54852 3.40038C5.00526 3.80854 4.50198 4.26696 4.04555 4.76877L4.04385 4.75351C3.99893 4.34217 4.00022 3.79848 4.00383 2.98906L4.01269 1.00335Z" fill="#0068FF"></path>
                    </svg></div>
                <div class="catalog-hero__reset-text">Сбросить</div>
            </div>
        </div>
        <div class="search-results__empty">
            <p class="search-results__empty-title">Под эти фильтры нет подходящих рецептов :(</p>
            <p class="search-results__empty-desk">Выберите другие значения фильтра или <a href="#">сбросьте их</a></p>
        </div>
    </section>
    <div class="popup-filters mobile" data-popup-wrapper="catalog-filters" data-overlay-on>
        <div class="popup-filters__close popup-video__close" data-popup-close="catalog-filters">
            <div class="btn-hover_parent">
                <div class="btn-hover_circle white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                    <path d="M6.69678 6.69671L17.3034 17.3033" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M6.69662 17.3033L17.3032 6.69671" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
        </div>
        <div class="popup-filters__top">
            <div class="popup-filters__title">фильтры</div>
            <div class="popup-filters__selects">
                <div class="catalog-hero__select">
                    <div class="select-wrapper">
                        <div class="select"><select class="select__select" style="width: 100%" data-select-placeholder="Тип блюда">
                                <option value="" selected="selected" disabled="disabled"></option>
                                <option value="Сёмыч">Сёмыч</option>
                                <option value="Ладушка">Ладушка</option>
                            </select></div>
                    </div>
                </div>
                <div class="catalog-hero__select">
                    <div class="select-wrapper">
                        <div class="select"><select class="select__select" style="width: 100%" data-select-placeholder="Время приготовления">
                                <option value="" selected="selected" disabled="disabled"></option>
                                <option value="Жирность1">Жирность1</option>
                                <option value="Жирность2">Жирность2</option>
                            </select></div>
                    </div>
                </div>
                <div class="catalog-hero__select">
                    <div class="select-wrapper">
                        <div class="select"><select class="select__select" style="width: 100%" data-select-placeholder="Повод">
                                <option value="" selected="selected" disabled="disabled"></option>
                                <option value="Жирность1">Жирность1</option>
                                <option value="Жирность2">Жирность2</option>
                            </select></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup-filters__bot">
            <div class="popup-filters__bot-reset">
                <div class="catalog-hero__reset">
                    <div class="catalog-hero__reset-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M4.01269 1.00335C4.01454 0.589137 3.68025 0.251856 3.26604 0.250008C2.85183 0.24816 2.51455 0.582445 2.5127 0.996654L2.50365 3.02568C2.50026 3.78054 2.49744 4.41017 2.55271 4.91635C2.61069 5.44728 2.74029 5.93661 3.06926 6.36169C3.15834 6.4768 3.25638 6.58449 3.36242 6.68379C3.42487 6.74227 3.49008 6.79784 3.55786 6.85029C3.98294 7.17926 4.47227 7.30886 5.0032 7.36684C5.50939 7.42211 6.13896 7.41929 6.89383 7.4159H6.89384L8.9229 7.40685C9.3371 7.405 9.67139 7.06772 9.66954 6.65351C9.66769 6.2393 9.33041 5.90501 8.9162 5.90686L6.93049 5.91572C6.12107 5.91933 5.57738 5.92062 5.16604 5.8757C5.13511 5.87232 5.10551 5.86873 5.07717 5.86494C5.49067 5.39871 5.95055 4.97451 6.44953 4.59962C7.99559 3.43804 9.91636 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12C2.75 11.5858 2.41421 11.25 2 11.25C1.58579 11.25 1.25 11.5858 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25C9.58034 1.25 7.34544 2.05032 5.54852 3.40038C5.00526 3.80854 4.50198 4.26696 4.04555 4.76877L4.04385 4.75351C3.99893 4.34217 4.00022 3.79848 4.00383 2.98906L4.01269 1.00335Z" fill="#0068FF"></path>
                        </svg></div>
                    <div class="catalog-hero__reset-text">Сбросить</div>
                </div>
            </div>
            <div class="popup-filters__bot-line"></div>
            <div class="popup-filters__bot-btn">
                <div class="popup-filters__button">Применить</div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</main>