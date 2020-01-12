
				<header id="header">
					<header >
						<div class="text qw">
							<form name="serch" action="/scan" method="post" > 
								<input type="text" name="words" placeholder="поиск">
								<input type="submit" name="qwest" value="поиск" >
							</form>
						</div>
							<button class="hamburger">&#9776;</button>
							<button class="cross">&#735;</button>
					</header>
					<div class="menu">
						<ul>
							<a href="/"><li> Главная страница </li></a>                    
							<?php if (User::isGuest()): ?>                
								<a href="/user/login/"><li> Вход</li></a>
								<a href="/user/register/"><li> Регистрация</li></a>
							<?php else: ?>
								<li ><a href="/user/logout/"> Выход</a>
								</li><?php if ( AdminBase::checkAdmin()): ?>                
									<a href="/admin/index/"><li> Админпанель </li></a>
								<?php endif; ?>
							<?php endif; ?>
						</ul>
					</div>
				</header>

