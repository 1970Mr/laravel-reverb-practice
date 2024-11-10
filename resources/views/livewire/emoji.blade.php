<div class="min-h-[100vh] flex justify-center items-center bg-[#110601] text-[#FFF5F0]">
    <div class="bg-black p-5 rounded-full flex border-[.1rem] border-gray-400 backdrop-blur-3xl gap-5 select-none" wire:ignore>
        <div class="text-5xl cursor-pointer p-2 transition relative w-[4.5rem] h-[4.5rem] rounded-full hover:bg-gray-500 flex justify-center items-center"
             id="heart" wire:click="sendReaction('❤️', 'heart')">❤️</div>
        <div class="text-5xl cursor-pointer p-2 transition relative w-[4.5rem] h-[4.5rem] rounded-full hover:bg-gray-500 flex justify-center items-center"
             id="fire" wire:click="sendReaction('🔥', 'fire')">🔥</div>
        <div class="text-5xl cursor-pointer p-2 transition relative w-[4.5rem] h-[4.5rem] rounded-full hover:bg-gray-500 flex justify-center items-center"
             id="rocket" wire:click="sendReaction('🚀', 'rocket')">🚀</div>
        <div class="text-5xl cursor-pointer p-2 transition relative w-[4.5rem] h-[4.5rem] rounded-full hover:bg-gray-500 flex justify-center items-center"
             id="wonder" wire:click="sendReaction('🤯', 'wonder')">🤯</div>
    </div>
</div>
