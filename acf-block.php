<?
// On this part I could use $fields = get_fields(); too, but I'll leave the variables with their own name to display porpuses
$toggle_block = get_field('Toggle_block') ?? false ; // (true/false field) -- false default
$title = get_field('Title'); // (text field)
$title_tag = get_field('title_tag'); // (select field h1,h2,h3,h4,h5,span,p)
$body_content = get_field('Body_content'); // (wysiwyg field)
$image = get_field('Image'); // (image field, returning array)
$questions_tag = get_field('Questions_tag'); // (select field h1,h2,h3,h4,h5,span,p)
$faqs = get_field('faqs'); // (Repeater)
// Since $faqs is a repeater and containrs the fields described below
// question // (text field)
// answer // (wysiwyg field)

$allowed_text_tags = ['h1', 'h2', 'h3', 'h4', 'h5', 'span', 'p'];

// Tags validation to avoid any othee value here
$title_tag_valid = in_array($title_tag, $allowed_text_tags) ? $title_tag : 'h2'; // Using h2 as default value
$questions_tag_valid = in_array($questions_tag, $allowed_text_tags) ? $questions_tag : 'p'; // Using p as default value

?>

<?php if($toggle_block) : ?>
    <section class="section faq-section">
        <div class="container">
            <div class="faq-overview">
                <<?= $title_tag_valid ?> class="title"><?= esc_html($title); ?> </?= $title_tag_valid ?>>
                <div class="description">
                    <?= esc_html($body_content); ?> 
                </div>
                <?php if(!empty($image)) : ?>
                    <img
                        class="image"
                        src="<?= esc_url($image['url']); ?>"
                        alt="<?= esc_attr($image['alt']); ?>"
                    />
                <?php endif; ?>
            </div>

            <div class="faq-list">
                <?php foreach($faqs as $faq) : ?>
                    <details class="accordion">
                        <summary>
                            <<?= $questions_tag_valid ?>><?= esc_html($faq['question']); ?> </?= $questions_tag_valid ?>>
                        </summary>
                        <div class="faq-content">
                            <div class="faq-content-wrapper">
                                <?= esc_html($faq['answer']); ?>
                            </div>
                        </div>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>