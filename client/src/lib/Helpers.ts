const nameImg = (mediaName: string) => {
    return mediaName.toLowerCase().replace(" ", "-");
}

const toTextDuration = (duration: number) => {
    if (duration < 60) {
        return `${duration}m`;
    } else if (duration % 60 == 0) {
        return `${Math.floor(duration / 60)}h`;
    } else {
        return `${Math.floor(duration / 60)}h ${duration % 60}m`;
    }
}

export { nameImg, toTextDuration }
