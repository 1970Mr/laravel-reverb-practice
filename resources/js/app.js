import './bootstrap';

Echo.channel('emoji-reaction')
    .listen('ReactionReceived', (e) => {
        console.log(e.emoji);
    });
