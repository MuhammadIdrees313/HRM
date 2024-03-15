import './bootstrap';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
// import Alpine from 'alpinejs';
// import focus from '@alpinejs/focus';
import intersect from '@alpinejs/intersect'
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import { Fancybox } from "@fancyapps/ui";
import { EmojiButton } from '@joeattardi/emoji-button';

const picker = new EmojiButton({
    position: {
        top: '0',
        right: '0'
    }
});
const trigger = document.querySelector('#emoji-button');
if (trigger) {
    trigger.addEventListener('click', () => picker.togglePicker(trigger));
}
picker.on('emoji', selection => {
    document.querySelector('.message-input').value += selection.emoji;
});
Fancybox.bind('[data-fancybox]', {
    //
});
document.addEventListener('livewire:navigated', () => {
    Fancybox.bind('[data-fancybox]', {
        //
    });
})

//For Chat Box

// window.Alpine = Alpine;
window.EmojiButton = EmojiButton;

// Alpine.plugin(focus);
Alpine.plugin(intersect)

// Alpine.start();
// window.Livewire = Livewire;
Livewire.start();
