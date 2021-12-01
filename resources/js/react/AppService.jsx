import Service from './views/Service';
import ServiceState from './context/service/serviceState';

function AppService () {
    return (
        <>
            <ServiceState>
                <Service/>                        
            </ServiceState>
        </>        
    );
}

export default AppService;
