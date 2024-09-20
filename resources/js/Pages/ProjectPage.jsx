import React from "react";
import Carousel from "../Components/Carousel";

function ProjectPage({ post }) {
    return (
        <main className="bg-[#E2E2E2] w-full min-h-[78vh] rounded-md py-6 px-6 md:px-12 flex flex-col justify-between dark:text-white dark:bg-[#1a1a1a]">
            <header className="border-gray-400 border-b uppercase">
                Projects
            </header>

            <section className="md:mx-6 lg:mx-8 my-6 grid lg:grid-cols-2 gap-6 min-w-0">
                <div className="min-w-0">
                    {/* @foreach (post.images as $image)
                    @if ($loop.first)
                        <img src="{ post.getImageURL($image.address) }" alt=""
                            className="aspect-video w-full object-cover rounded-md shadow-md" />
                    @endif
                @endforeach


                <div className="grid sm:grid-cols-3 grid-cols-none gap-3 mt-2">
                    @foreach (post.images as $image)
                        @if (!$loop.first)
                            <img src="{ post.getImageURL($image.address) }" alt=""
                                className="aspect-video object-cover rounded-md w-full shadow-md min-w-0 min-h-0" />
                        @endif
                    @endforeach
                </div> */}

                    <Carousel imgs={post.images} post={post} />
                </div>

                <div className="flex flex-col gap-1 p-1 min-w-0">
                    <h3 className="uppercase font-semibold">{post.title}</h3>
                    <p className="text-sm text-justify">{post.description}</p>

                    <div className="my-2">
                        <h3 className="font-semibold">Techs Used</h3>
                        <div className="flex gap-1 flex-wrap text-white dark:text-black">
                            {/* @foreach (explode(' ', post.techs) as $tech)
                            <span
                                className="bg-black dark:bg-white p-1 px-[14px] font-medium rounded-md">{ $tech }</span>
                        @endforeach */}
                        </div>
                    </div>

                    <div className="my-2">
                        <h3 className="font-semibold">Links</h3>
                        <a href={"https://" + post.website}>
                            <div className="font-medium mb-1 rounded-md flex justify-between flex-wrap">
                                <span>Website: </span>{" "}
                                <span className="break-words break-all">
                                    {post.website || "Not yet available"}
                                </span>
                            </div>
                        </a>

                        <a href={"https://" + post.github}>
                            <div className="font-medium mb-1 rounded-md flex justify-between flex-wrap">
                                <span>GitHub: </span>{" "}
                                <span className="break-words break-all">
                                    {post.github || "Not yet available"}
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <a
                href="/projects"
                className="flex gap-2 font-semibold items-center"
            >
                <img
                    src="{ asset('img/arrow.png') }"
                    alt="arrow icon"
                    className="h-4 rotate-180 dark:brightness-[10]"
                />
                <span>Back</span>
            </a>
        </main>
    );
}

export default ProjectPage;
