<div>


    @if (!empty($this->tags))
        <!-- Message Content Inner -->
        <div class="message-content-inner max-h-96 overflow-y-auto">
            @if (count($tags) === 1)
                <div class="flex items-center justify-center flex-col">
                    <div class="message-avatar">
                        {{-- <img
                            src="https://img.thuthuatphanmem.vn/uploads/2018/09/19/avatar-facebook-chat-4_105604005.jpg"
                            alt=""></div> --}}
                        {!! getAvatar($user_id) !!}
                    </div>
                    <div class="message-text">{{ getName($user_id) }}</div>
                </div>
            @else
                <div class="flex items-center justify-center flex-col">
                    <div class="message-avatar">
                        <div class="flex -space-x-2">
                            @php
                                $userIds = explode(',', $user_id);
                            @endphp

                            @foreach ($userIds as $userId)
                                @php
                                    $trimmedUserId = trim($userId, '[]');
                                    // tên
                                    // $trimmedUserId = str_replace('"', '', $trimmedUserId);
                                @endphp
                                {!! getAvatar($trimmedUserId) !!}
                                {{-- <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white dark:ring-gray-800"
                                    src=""> --}}
                                {{-- <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white dark:ring-gray-800" src="https://i.pravatar.cc/&quot;M\u00f4 ph\u1eadt&quot;"> --}}
                            @endforeach
                        </div>
                    </div>
                    <div class="message-text">
                        {{ isset($count) && $count <= 4 ? getNames($user_id) : getNames($user_id) . ' và những người khác.' }}
                    </div>
                </div>
            @endif



            <!-- Time Sign -->
            <div class="message-time-sign">
                <span>28 June, 2020</span>
            </div>

            <div class="message-bubble me">
                <div class="message-bubble-inner">
                    <div class="message-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
                    <div class="message-text">
                        <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod laoreet.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="message-bubble">
                <div class="message-bubble-inner">
                    <div class="message-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
                    <div class="message-text">
                        <p>Laoreet. dolore magna imperdiet quod mazim placerat facer possim. 👍</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="message-bubble me">
                <div class="message-bubble-inner">
                    <div class="message-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
                    <div class="message-text">
                        <p>Albuom commodo consequat. 😉</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="message-bubble">
                <div class="message-bubble-inner">
                    <div class="message-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
                    <div class="message-text">
                        <!-- Typing Indicator -->
                        <div class="typing-indicator">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Message Content Inner / End -->

        <!-- Reply Area -->
        <div class="message-reply z-10">
            <textarea cols="1" rows="1" placeholder="Tin nhắn"></textarea>
            <button class="button ripple-effect">Gửi</button>

        </div>
    @endif
    @php $user_id = request()->route('id'); @endphp

    @if (isset($user_id))
        <div class="messages-headline" style="max-height: none">
            <h4> {!! getName($user_id) !!} </h4>
            <a href="#" class="message-action text-red-500"><i class="icon-feather-trash-2"></i>
                <span class="md:inline hidden"> Xóa cuộc trò chuyện</span> </a>
        </div>

        <div class="message-content-scrolbar" data-simplebar>
            <!-- Message Content Inner -->
            <div class="message-content-inner max-h-96 overflow-y-auto">
                <div class="flex items-center justify-center flex-col">
                    <div class="message-avatar">
                        {!! getAvatar($user_id) !!}
                    </div>
                    <div class="message-text">{{ getName($user_id) }}</div>
                </div>

                <!-- Time Sign -->
                <div class="message-time-sign">
                    <span>28 June, 2020</span>
                </div>

                <div class="message-bubble me">
                    <div class="message-bubble-inner">
                        <div class="message-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
                        <div class="message-text">
                            <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod laoreet.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="message-bubble">
                    <div class="message-bubble-inner">
                        <div class="message-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
                        <div class="message-text">
                            <p>Laoreet. dolore magna imperdiet quod mazim placerat facer possim. 👍</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="message-bubble me">
                    <div class="message-bubble-inner">
                        <div class="message-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
                        <div class="message-text">
                            <p>Albuom commodo consequat. 😉</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="message-bubble">
                    <div class="message-bubble-inner">
                        <div class="message-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
                        <div class="message-text">
                            <!-- Typing Indicator -->
                            <div class="typing-indicator">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Message Content Inner / End -->

            <!-- Reply Area -->
            <div class="message-reply z-10">
                <textarea cols="1" rows="1" placeholder="Tin nhắn"></textarea>
                <button class="button ripple-effect">Gửi</button>

            </div>
        </div>
    @endif

</div>
