<template>
  <div>
    <div class="row">

      <div class="col-md-12">
        &nbsp;
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <input type="text" name="" value="" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3>Популярные категории</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <a href="#">Страхование</a><br>
        <a href="#">Частные сады</a><br>
        <a href="#">Детские центры</a><br>
      </div>
      <div class="col-md-4">
        <a href="#">Рестораны</a><br>
        <a href="#">Ветеринарные клиники</a><br>
        <a href="#">Услуги для животных</a><br>
      </div>
      <div class="col-md-4">
        <a href="#">Магазины с одеждой</a><br>
        <a href="#">Иностранные языки</a><br>
        <a href="#">Боулинг и бильярд</a><br>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h3>Популярные акции</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail equal-min-height">
          <img class="img-rounded" src="img/img.jpg">
          <div class="caption">
            <h4>
              <a href="#">
                Название акции
              </a>
            </h4>
            <p>Описание акции</p>
            <p>Категория</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail equal-min-height">
          <img class="img-rounded" src="img/img.jpg">
          <div class="caption">
            <h4>
              <a href="#">
                Название акции
              </a>
            </h4>
            <p>Описание акции</p>
            <p>Категория</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail equal-min-height">
          <img class="img-rounded" src="img/img.jpg">
          <div class="caption">
            <h4>
              <a href="#">
                Название акции
              </a>
            </h4>
            <p>Описание акции</p>
            <p>Категория</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
