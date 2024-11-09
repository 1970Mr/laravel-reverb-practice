<div class="min-h-[100vh] flex justify-center items-center bg-[#110601] text-[#FFF5F0]">
    <div class="bg-black p-5 rounded-full flex border-[.1rem] border-gray-400 backdrop-blur-3xl gap-5 select-none">
        <div class="text-5xl cursor-pointer p-2 transition hover:scale-125" wire:click="sendReaction('heart')">❤️</div>
        <div class="text-5xl cursor-pointer p-2 transition hover:scale-125" wire:click="sendReaction('fire')">🔥</div>
        <div class="text-5xl cursor-pointer p-2 transition hover:scale-125" wire:click="sendReaction('rocket')">🚀</div>
        <div class="text-5xl cursor-pointer p-2 transition hover:scale-125" wire:click="sendReaction('wonder')">🤯</div>
    </div>
</div>
