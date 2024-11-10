import './bootstrap';

Echo.channel('emoji-reactions')
    .listen('ReactionReceived', (e) => {
        showReactionAnimation(e.emoji, e.id);
    });

function showReactionAnimation(emoji, id) {
    const container = document.getElementById(id);

    const reactionElement = document.createElement('div');
    reactionElement.classList.add('reaction');
    reactionElement.innerText = emoji;

    reactionElement.style.bottom = '2rem';

    container.appendChild(reactionElement);

    reactionElement.addEventListener('animationend', () => {
        reactionElement.remove();
    });
}
