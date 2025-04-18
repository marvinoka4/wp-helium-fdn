<?php

/**
 * Template Name: Home Page
 * @package helium-fdn
 */

$links = apply_filters('helium_fdn_front_page_links', array(
    'docs' => 'https://get.foundation/sites/docs/',
    'forum' => 'https://github.com/foundation/foundation-sites/discussions',
    'github' => 'https://github.com/foundation/foundation-sites',
    'twitter' => 'https://twitter.com/FoundationCSS',
));
?>

<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h1>Welcome to Foundation</h1>
        </div>
    </div>

    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <div class="callout">
                <h3>We&rsquo;re stoked you want to try Foundation! </h3>
                <p>To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>
                <p>Once you've exhausted the fun in this document, you should check out:</p>
                <div class="grid-x grid-padding-x">
                    <div class="large-4 medium-4 cell">
                        <p><a href="<?php echo esc_url($links['docs']); ?>"><?php esc_html_e('Foundation Documentation', 'helium-fdn'); ?></a><br /><?php esc_html_e('Everything you need to know about using the framework.', 'helium-fdn'); ?></p>
                    </div>
                    <div class="large-4 medium-4 cell">
                        <p><a href="<?php echo esc_url($links['forum']); ?>"><?php esc_html_e('Foundation Forum', 'helium-fdn'); ?></a><br /><?php esc_html_e('Join the Foundation community to ask a question or show off your knowlege.', 'helium-fdn'); ?></p>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-4 medium-4 medium-push-2 cell">
                        <p><a href="<?php echo esc_url($links['github']); ?>"><?php esc_html_e('Foundation on Github', 'helium-fdn'); ?></a><br /><?php esc_html_e('Latest code, issue reports, feature requests and more.', 'helium-fdn'); ?></p>
                    </div>
                    <div class="large-4 medium-4 medium-pull-2 cell">
                        <p><a href="<?php echo esc_url($links['twitter']); ?>"><?php esc_html_e('@FoundationCSS', 'helium-fdn'); ?></a><br /><?php esc_html_e('Ping us on Twitter if you have questions. When you build something with this we\'d love to see it. ', 'helium-fdn'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <div class="reveal" id="exampleModal1" data-reveal>
                <h1>Awesome. I Have It.</h1>
                <p class="lead">Your couch. It is mine.</p>
                <p>I'm a cool paragraph that lives inside an even cooler modal. Wins!</p>
                <button class="close-button" data-close aria-label="Close modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <p><button class="button" data-open="exampleModal1">Click me for a modal</button></p>

            <ul class="tabs" data-tabs id="example-tabs">
                <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
                <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">Tab 2</a></li>
            </ul>

            <div class="tabs-content" data-tabs-content="example-tabs">
                <div class="tabs-panel is-active" id="panel1">
                    <i class="uil uil-home"></i> Home
                    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
                </div>
                <div class="tabs-panel" id="panel2">
                    <i class="uil uil-home"></i> Home
                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-x grid-padding-x">
        <div class="large-8 medium-8 cell">
            <h5>Here&rsquo;s your basic grid:</h5>
            <!-- Grid Example -->

            <div class="grid-x grid-padding-x">
                <div class="large-12 cell">
                    <div class="primary callout">
                        <p><strong>This is a twelve cell section in a grid-x.</strong> Each of these includes a div.callout element so you can see where the cell are - it's not required at all for the grid.</p>
                    </div>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-6 medium-6 cell">
                    <div class="primary callout">
                        <p>Six cell</p>
                    </div>
                </div>
                <div class="large-6 medium-6 cell">
                    <div class="primary callout">
                        <p>Six cell</p>
                    </div>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-4 medium-4 small-4 cell">
                    <div class="primary callout">
                        <p>Four cell</p>
                    </div>
                </div>
                <div class="large-4 medium-4 small-4 cell">
                    <div class="primary callout">
                        <p>Four cell</p>
                    </div>
                </div>
                <div class="large-4 medium-4 small-4 cell">
                    <div class="primary callout">
                        <p>Four cell</p>
                    </div>
                </div>
            </div>

            <hr />

            <h5>We bet you&rsquo;ll need a form somewhere:</h5>
            <form>
                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell">
                        <label>Input Label</label>
                        <input type="text" placeholder="large-12.cell" />
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-4 medium-4 cell">
                        <label>Input Label</label>
                        <input type="text" placeholder="large-4.cell" />
                    </div>
                    <div class="large-4 medium-4 cell">
                        <label>Input Label</label>
                        <input type="text" placeholder="large-4.cell" />
                    </div>
                    <div class="large-4 medium-4 cell">
                        <div class="grid-x">
                            <label>Input Label</label>
                            <div class="input-group">
                                <input type="text" placeholder="small-9.cell" class="input-group-field" />
                                <span class="input-group-label">.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell">
                        <label>Select Box</label>
                        <select>
                            <option value="husker">Husker</option>
                            <option value="starbuck">Starbuck</option>
                            <option value="hotdog">Hot Dog</option>
                            <option value="apollo">Apollo</option>
                        </select>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-6 medium-6 cell">
                        <label>Choose Your Favorite</label>
                        <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Radio 1</label>
                        <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Radio 2</label>
                    </div>
                    <div class="large-6 medium-6 cell">
                        <label>Check these out</label>
                        <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
                        <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell">
                        <label>Textarea Label</label>
                        <textarea placeholder="small-12.cell"></textarea>
                    </div>
                </div>
            </form>
        </div>

        <div class="large-4 medium-4 cell">
            <h5>Try one of these buttons:</h5>
            <p><a href="#" class="button">Simple Button</a><br />
                <a href="#" class="success button">Success Btn</a><br />
                <a href="#" class="alert button">Alert Btn</a><br />
                <a href="#" class="secondary button">Secondary Btn</a><br />
                <a href="#" class="tertiary button">Tertiary Btn</a><br />
                <a href="#" class="accent button">Accent Btn</a>
            </p>
            <div class="callout">
                <h5>So many components, girl!</h5>
                <p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
                <a href="<?php echo esc_url($links['docs']); ?>" class="small button"><?php esc_html_e('Go to Foundation Docs', 'helium-fdn'); ?></a>
            </div>
        </div>
    </div>

    <ul class="accordion" data-accordion>
        <li class="accordion-item is-active" data-accordion-item>
            <!-- Accordion tab title -->
            <a href="#" class="accordion-title">Accordion 1</a>

            <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
            <div class="accordion-content" data-tab-content>
                <p>Panel 1. Lorem ipsum dolor</p>
                <a href="#">Nowhere to Go</a>
            </div>
        </li>
        <!-- ... -->
    </ul>

    <ul class="accordion" data-accordion>
        <li class="accordion-item is-active" data-accordion-item>
            <a href="#" class="accordion-title">Accordion 1</a>
            <div class="accordion-content" data-tab-content>
                Panel 1. I'm open because I'm loaded that way, but you can't close me
            </div>
        </li>
        <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">Accordion 2, you can't open me.</a>
            <div class="accordion-content" data-tab-content>
                Panel 2. Lorem ipsum dolor
            </div>
        </li>
        <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">Accordion 3, you can't open me.</a>
            <div class="accordion-content" data-tab-content>
                Panel 3. Lorem ipsum dolor
            </div>
        </li>
    </ul>


    <button class="button" type="button" data-toggle="example-dropdown">Toggle Dropdown</button>

    <div class="dropdown-pane" id="example-dropdown" data-dropdown data-auto-focus="true">
        Example form in a dropdown.
        <form>
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell medium-6">
                        <label>Name
                            <input type="text" placeholder="Kirk, James T.">
                        </label>
                    </div>
                    <div class="cell medium-6">
                        <label>Rank
                            <input type="text" placeholder="Captain">
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <button class="button" type="button" data-toggle="example-dropdown-1">Hoverable Dropdown</button>
    <div class="dropdown-pane" id="example-dropdown-1" data-dropdown data-hover="true" data-hover-pane="true">
        Just some junk that needs to be said. Or not. Your choice.
    </div>

</div>