@extends('frontend.layout', ['title' => 'SQB Construction - Расчет стоимости контрольного обмера', 'page' => 'calc'])

@section('content')
<section class="calc">
	<div class="container-fluid">
		<h2 class="calc__title">Расчет стоимости контрольного обмера</h2>
		<div class="row">
			<div class="col-xl-6 col-lg-10 offset-xl-3 offset-lg-1">
				<div class="calc-form">
					<label for="price" class="calc-form__label">
						Введите общую стоимость строительно-монтажных работ <span class="clr-orange">без НДС</span>
					</label>
					<input id="price" class="calc-form__input" type="tel" pattern="[+]{1}[8-9]{3} [0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}" placeholder="Введите сумму">
					<button class="calc-form__button" type="button">
						Расcчитать стоимость
						<img src="{{ asset('assets/img/navfooter/arroow2right.svg') }}" alt="">
					</button>
				</div>
				<div class="calc-body">
					<div class="calc-body__caption">
						<span>Ставка тарифа - <span id="rate">0</span>%</span>
						<button class="calc-body__tip open-modal">
							<svg width="8" height="15" viewBox="0 0 8 15" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M4.61084 10.5025H2.77833C2.78489 9.87192 2.84072 9.35632 2.94581 8.95566C3.05747 8.54844 3.2381 8.17734 3.48768 7.84236C3.73727 7.50739 4.06897 7.12644 4.48276 6.69951C4.78489 6.3908 5.06076 6.10181 5.31034 5.83251C5.5665 5.55665 5.7734 5.26108 5.93103 4.94581C6.08867 4.62397 6.16749 4.23974 6.16749 3.7931C6.16749 3.3399 6.08539 2.9491 5.92118 2.62069C5.76355 2.29228 5.52709 2.03941 5.21182 1.86207C4.90312 1.68473 4.51888 1.59606 4.05911 1.59606C3.67816 1.59606 3.31691 1.66502 2.97537 1.80296C2.63383 1.94089 2.35796 2.15435 2.14778 2.44335C1.9376 2.72578 1.82923 3.09688 1.82266 3.55665H0C0.0131363 2.81445 0.197044 2.17734 0.551724 1.64532C0.912972 1.1133 1.39901 0.706075 2.00985 0.423645C2.62069 0.141215 3.30378 0 4.05911 0C4.89327 0 5.60263 0.151067 6.18719 0.453202C6.77833 0.755337 7.22824 1.18883 7.53695 1.75369C7.84565 2.31199 8 2.97537 8 3.74384C8 4.33498 7.87849 4.88013 7.63547 5.37931C7.39901 5.87192 7.0936 6.33497 6.71921 6.76847C6.34483 7.20197 5.94745 7.61576 5.52709 8.00985C5.16585 8.34483 4.92282 8.7225 4.79803 9.14286C4.67323 9.56322 4.61084 10.0164 4.61084 10.5025ZM2.69951 13.6256C2.69951 13.33 2.79146 13.0805 2.97537 12.8768C3.15928 12.6732 3.42529 12.5714 3.7734 12.5714C4.12808 12.5714 4.39737 12.6732 4.58128 12.8768C4.76519 13.0805 4.85714 13.33 4.85714 13.6256C4.85714 13.908 4.76519 14.1511 4.58128 14.3547C4.39737 14.5583 4.12808 14.6601 3.7734 14.6601C3.42529 14.6601 3.15928 14.5583 2.97537 14.3547C2.79146 14.1511 2.69951 13.908 2.69951 13.6256Z"
									fill="#DD1E1E" />
							</svg>
						</button>
					</div>
					<div class="calc-body__result">
						Цена контрольного обмера с НДС: <br>
						<span id="result" class="mt-2">0 сум</span>
					</div>
					<a href="{{ asset('assets/download/Перечень документов.pdf') }}" download class="calc-body__btn">
						<img src="{{ asset('assets/img/about/pdfDownload.svg') }}" alt="">
						Перечень необходимых документов / <br class="d-block d-sm-none"> Скачать PDF
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="form-section">
	<div class="container-fluid">
		<h2 class="form-section__title">Оставьте заявку, чтобы заказать услугу</h2>
		<h3 class="form-section__subtitle">Наш менеджер свяжется с вами в ближайшее время</h3>
		<form action="{{ asset('assets/libraries/kiranosend/kiranosend.php') }}" method="POST" class="form">
				<input type="hidden" name="page" value="Калькулятор">
			<div class="row">
				<div class="col-lg-4 col-md-6 offset-xl-1">
					<div class="form__field">
						<label for="name">Ваше имя</label>
						<input id="name" type="text" name="name" placeholder="Введите имя" required>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mt-md-0 mt-3">
					<div class="form__field">
						<label for="phone">Ваш телефон</label>
						<input id="phone" class="phonemask" type="tel" pattern="[+]{1}[8-9]{3} [0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}" name="phone" placeholder="+998" required>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 mt-lg-0 mt-4 d-flex">
					<button class="form-btn">
						Отправить
						<img src="{{ asset('assets/img/navfooter/arroow2right.svg') }}" alt="">
					</button>
				</div>
			</div>
		</form>
	</div>
</section>

<div class="loading-modal"></div>

<div class="modal">
	<div class="container-fluid">
		<img class="close-modal" src="{{ asset('assets/img/navfooter/burgerXXX.svg') }}" alt="">
		<h2 class="modal__title">Тарифная ставка оказываемых услуг <br> по контрольному обмеру</h2>
		<div class="modal__body">
			<div class="row">
				<div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1">
					<ul class="rate-list">
						<li class="rate-item">
							<div class="left">
								<h2 class="rate-heading">Общая стоимость строительно-монтажных работ без НДС</h2>
							</div>
							<div class="right">
								<h2 class="rate-heading">Ставка</h2>
							</div>
						</li>
						<li class="rate-item">
							<div class="left">
								<p class="rate-text rate-text--bold">1,0 млрд. и менее</p>
							</div>
							<div class="right">
								<p class="rate-text">Не менее 1,0% +НДС</p>
							</div>
						</li>
						<li class="rate-item">
							<div class="left">
								<p class="rate-text rate-text--bold">от 1,0 млрд. до 10,0 млрд.</p>
							</div>
							<div class="right">
								<p class="rate-text">Не менее 0,7% +НДС</p>
							</div>
						</li>
						<li class="rate-item">
							<div class="left">
								<p class="rate-text rate-text--bold">от 10,0 млрд. до 100,0 млрд.</p>
							</div>
							<div class="right">
								<p class="rate-text">Не менее 0,5% +НДС</p>
							</div>
						</li>
						<li class="rate-item">
							<div class="left">
								<p class="rate-text rate-text--bold">от 100,0 млрд. и выше</p>
							</div>
							<div class="right">
								<p class="rate-text">Не менее 0,3% +НДС</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('custom-js')
<script src="{{ asset('assets/libraries/phonemask/phonemask.min.js') }}"></script>
<script src="{{ asset('assets/scripts/calc.js?v=3') }}"></script>
@endsection