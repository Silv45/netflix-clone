export default interface IMedia {
    title: string;
    synopsis?: string;
    type: "movie" | "series";
    duration: number;
    year: number;
    genres: string | string[];
    img: {horizontal: string, vertical: string};
}