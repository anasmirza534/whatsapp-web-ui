<!DOCTYPE html>
<html>
<!--
[] resources
  - animation: http://velocityjs.org/
-->

<head>
  <meta charset="utf-8">
  <title>whatsapp ui clone</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

  <link rel="stylesheet" href="css/app.css?v=<?= time() ?>">

  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>
  <div class="mdl-layout mdl-js-layout">
    <header class="mdl-layout__header bg-header">
      <div class="mdl-layout__header-row">
        <!-- <span class="mdl-layout__title">Simple Layout</span> -->
      </div>
      <div class="mdl-layout-spacer"></div>
    </header>

    <main class="mdl-layout__content bg-body"></main>

    <main class="mdl-layout__content mdl-shadow--2dp main-body">
      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col side-panel">
          <div class="mdl-grid header">
            <div class="mdl-cell mdl-cell--2-col">
              <div class="avatar">
                <img src="https://api.adorable.io/avatars/128/anas.png" />
              </div>
            </div>
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell mdl-cell--2-col">
              <button class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">chat</i>
              </button>
            </div>
            <div class="mdl-cell mdl-cell--2-col pos-rel">
              <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">more_vert</i>
              </button>
              <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
                <li class="mdl-menu__item">Some Action</li>
                <li class="mdl-menu__item">Another Action</li>
                <li class="mdl-menu__item">Disabled Action</li>
                <li class="mdl-menu__item">Yet Another Action</li>
              </ul>
            </div>
          </div>
          <div class="search-contact">
            <div class="mdl-grid search-contact-inner">

              <div class="mdl-cell mdl-cell--2-col search-icon-container">
                <button class="mdl-button mdl-js-button mdl-button--icon">
                  <i class="material-icons">search</i>
                </button>
                <button class="mdl-button mdl-js-button mdl-button--icon hide">
                  <i class="material-icons">arrow_back</i>
                </button>
              </div>
              <div class="mdl-cell mdl-cell--10-col search-text-container">
                <input type="text" id="searchfield" placeholder="Search contacts..." />
              </div>
            </div>

          </div>

          <div class="user-list">
            <ul class="mdl-list">
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                  <span class="mdl-list__item-primary-content">
                    <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/mirza.png" />
                    <span>Bryan Cranston</span>
                    <span class="mdl-list__item-sub-title">62 Episodes</span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <span class="mdl-list__item-secondary-info">5:35</span>
                  </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/azhar.png" />
                  <span>Aaron Paul</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">4:23</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                  <span class="mdl-list__item-primary-content">
                    <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/mirza.png" />
                    <span>Bryan Cranston</span>
                    <span class="mdl-list__item-sub-title">62 Episodes</span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <span class="mdl-list__item-secondary-info">5:35</span>
                  </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/azhar.png" />
                  <span>Aaron Paul</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">4:23</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                  <span class="mdl-list__item-primary-content">
                    <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/mirza.png" />
                    <span>Bryan Cranston</span>
                    <span class="mdl-list__item-sub-title">62 Episodes</span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <span class="mdl-list__item-secondary-info">5:35</span>
                  </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                  <span class="mdl-list__item-primary-content">
                    <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/mirza.png" />
                    <span>Bryan Cranston</span>
                    <span class="mdl-list__item-sub-title">62 Episodes</span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <span class="mdl-list__item-secondary-info">5:35</span>
                  </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/azhar.png" />
                  <span>Aaron Paul</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">4:23</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                  <span class="mdl-list__item-primary-content">
                    <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/mirza.png" />
                    <span>Bryan Cranston</span>
                    <span class="mdl-list__item-sub-title">62 Episodes</span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <span class="mdl-list__item-secondary-info">5:35</span>
                  </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                  <span class="mdl-list__item-primary-content">
                    <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/mirza.png" />
                    <span>Bryan Cranston</span>
                    <span class="mdl-list__item-sub-title">62 Episodes</span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <span class="mdl-list__item-secondary-info">5:35</span>
                  </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/azhar.png" />
                  <span>Aaron Paul</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">4:23</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                  <span class="mdl-list__item-primary-content">
                    <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/mirza.png" />
                    <span>Bryan Cranston</span>
                    <span class="mdl-list__item-sub-title">62 Episodes</span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <span class="mdl-list__item-secondary-info">5:35</span>
                  </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/azhar.png" />
                  <span>Aaron Paul</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">4:23</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                  <span class="mdl-list__item-primary-content">
                    <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/mirza.png" />
                    <span>Bryan Cranston</span>
                    <span class="mdl-list__item-sub-title">62 Episodes</span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <span class="mdl-list__item-secondary-info">5:35</span>
                  </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/azhar.png" />
                  <span>Aaron Paul</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">4:23</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                  <span class="mdl-list__item-primary-content">
                    <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/mirza.png" />
                    <span>Bryan Cranston</span>
                    <span class="mdl-list__item-sub-title">62 Episodes</span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <span class="mdl-list__item-secondary-info">5:35</span>
                  </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/azhar.png" />
                  <span>Aaron Paul</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">4:23</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line mdl-button">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/taha.png" />
                  <span>Bob Odenkirk</span>
                  <span class="mdl-list__item-sub-title">62 Episodes</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="mdl-list__item-secondary-info">Yesterday</span>
                </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="mdl-cell mdl-cell--8-col main-panel">
          <div class="mdl-grid header">
            <div class="mdl-cell mdl-cell--4-col">
                <span class="mdl-list__item-primary-content">
                  <img class="mdl-list__item-avatar" src="https://api.adorable.io/avatars/128/anas.png" />
                  <span class="title-name">Bob Odenkirk</span>
                </span>
            </div>
          </div>
          <div class="chat-container">
              <div class="mdl-shadow--2dp enter-message">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--1-col">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons">insert_emoticon</i>
                        </button>
                    </div>
                    <div class="mdl-cell mdl-cell--10-col message-text-container">
                      <input type="text" id="messagefield" placeholder="Send message" />
                    </div>
                    <div class="mdl-cell mdl-cell--1-col send-button-container">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons">send</i>
                        </button>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/app.js?v=<?=time()?>"></script>

</body>
</html>
