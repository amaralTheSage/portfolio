import React from "react";
import Carousel from "../Components/Carousel";
import { Head } from "@inertiajs/react";

function ProjectPage({ post, arrow, images }) {
    return (
        <>
            <Head title={`Gabriel Amaral | ${post.title}`} />
            <main className="bg-[#E2E2E2] w-full min-h-[78vh] rounded-md py-6 px-6 md:px-12 flex flex-col justify-between dark:text-white dark:bg-[#1a1a1a]">
                <header className="border-gray-400 border-b uppercase">
                    Projects
                </header>
                <section className="md:mx-6 lg:mx-8 my-6 flex flex-col xl:grid xl:grid-cols-5 gap-6 min-w-0">
                    <div className="min-w-0 col-span-3">
                        <Carousel imgs={images} post={post} arrow={arrow} />

                        {/* Section right of image (big screens) */}
                        <div className="hidden mt-2 xl:flex flex-col gap-1">
                            <div className="my-2">
                                <h3 className="font-semibold">Techs Used</h3>
                                <div className="flex gap-1 flex-wrap text-white dark:text-black">
                                    {post.techs.split(" ").map((tech) => {
                                        return (
                                            <span
                                                key={tech}
                                                className="bg-black dark:bg-white p-1 px-[14px] font-medium rounded-md"
                                            >
                                                {tech}
                                            </span>
                                        );
                                    })}
                                </div>
                            </div>
                            <div className="my-2">
                                <h3 className="font-semibold">Links</h3>
                                <a href={"https://" + post.website}>
                                    <div className="font-medium mb-1 rounded-md flex justify-between flex-wrap">
                                        <span>Website: </span>{" "}
                                        <span className="break-words break-all">
                                            {post.website ||
                                                "Not yet available"}
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
                    </div>

                    {/* Section under image (small screens) */}
                    <div className="flex flex-col gap-1 px-1 min-w-0  col-span-2">
                        <h3 className="uppercase font-semibold">
                            {post.title}
                        </h3>
                        <p className="text-sm text-justify">
                            {post.description.split("\n").map((line, index) => (
                                <span key={index}>
                                    {line}
                                    <br />
                                    <br />
                                </span>
                            ))}
                        </p>
                        <div className="xl:hidden flex flex-col gap-1">
                            <div className="my-2">
                                <h3 className="font-semibold">Techs Used</h3>
                                <div className="flex gap-1 flex-wrap text-white dark:text-black">
                                    {post.techs.split(" ").map((tech) => {
                                        return (
                                            <span
                                                key={tech}
                                                className="bg-black dark:bg-white p-1 px-[14px] font-medium rounded-md"
                                            >
                                                {tech}
                                            </span>
                                        );
                                    })}
                                </div>
                            </div>
                            <div className="my-2">
                                <h3 className="font-semibold">Links</h3>
                                <a href={"https://" + post.website}>
                                    <div className="font-medium mb-1 rounded-md flex justify-between flex-wrap">
                                        <span>Website: </span>{" "}
                                        <span className="break-words break-all">
                                            {post.website ||
                                                "Not yet available"}
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
                    </div>
                </section>
                <a
                    href="/projects"
                    className="flex gap-2 font-semibold items-center"
                >
                    <img
                        src={arrow}
                        alt="arrow icon"
                        className="h-4 rotate-180 dark:brightness-[10]"
                    />
                    <span>Back</span>
                </a>
            </main>
        </>
    );
}

export default ProjectPage;
